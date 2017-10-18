<?php

namespace Modules\Api\Controllers;

use Core\Route;
use Core\SOAP;
use Core\QB\DB;
use Exception;
use Modules\Base;
use Modules\Api\Models\Price;
use Modules\Api\Models\Brands;
use Modules\Api\Models\Stocks;
use Modules\Api\Models\Products;
use Modules\Api\Models\Categories;
use Modules\Api\Models\StocksCount;

class Api extends Base
{
    public function before()
    {
        set_time_limit(9999999999999);
    }

    /**
     * Список категорий
     */
    public function getCategoriesAction()
    {
        $result = SOAP::createSoapClient('getCategories');

        if (count($result->return->categories->category)) {
            foreach ($result->return->categories->category as $obj) {
                if (Categories::checkCategory($obj)) {
                    Categories::insertRows($obj);
                } else {
                    Categories::updateRows($obj);
                }
            }
        }
    }

    /**
     * Список товаров
     */
    public function getProductsAction()
    {
        for ($i = 1; $i <= 1500; $i++) {
            $offset = $i >= 2 ? 350 * $i : 0;
            $params = ['limit' => 350, 'offset' => $offset];

            $result = SOAP::soapProductsList($params);
            if (count($result)) {
                foreach ($result as $obj) {
                    if (Products::checkItem($obj)) {
                        Products::insertRows($obj);
                    } else {
                        Products::updateRows($obj);
                    }
                }
            }
        }
    }

    public function getCurrentProductAction()
    {
        $params = ['id' => Route::param('id')];

        try {
            $result = SOAP::soapProductsList($params);
        } catch (Exception $err) {
            throw new Exception($err->getMessage());
        }
    }

    /**
     * Список брендов
     */
    public function getBrandsAction()
    {
        $result = SOAP::createSoapClient('getBrands');

        foreach ($result->return->brands->brand as $obj) {
            if (Brands::checkBrand($obj)) {
                Brands::insertRows($obj);
            }
        }
    }

    /**
     * Получение складов
     */
    public function getStocksAction()
    {
        $result = SOAP::createSoapClient('getStocks');

        if (count($result->return->stocks->stock)) {
            foreach ($result->return->stocks->stock as $obj) {
                if (Stocks::check($obj)) {
                    Stocks::insertRows($obj);
                }
            }
        }
    }

    /**
     * Обновление остатков
     */
    public function getStockCountAction()
    {
        $result = SOAP::createSoapClient('getStockCount');

        try {
            foreach ($result->return->stockcount as $obj) {
                if (StocksCount::check($obj)) {
                    StocksCount::insertRows($obj);
                }
            }
        } catch (Exception $err) {
            throw new Exception($err->getMessage());
        }
    }

    public function getPricesAction()
    {
        $params = ['limit' => 350, 'offset' => 0];
        $result = SOAP::createSoapClientPrices($params);

        var_dump($result);
        die;
    }

    public function getModelsAction()
    {
        $result = SOAP::createSoapClient('getModels');

        var_dump($result);
        die;
    }

    /**
     * Список типов цен
     */
    public function getPricesTypesAction()
    {
        $result = SOAP::createSoapClient('getPricesTypes');

        if (count($result->return->pricetypes->pricetype)) {
            foreach ($result->return->pricetypes->pricetype as $obj) {
                if (Price::check($obj)) {
                    Price::insertRows($obj);
                } else {
                    Price::updateRows($obj);
                }
            }
        }
    }

    public function updateParentAction()
    {
        $result = DB::select()->from('catalog')->where('status', '=', 1)->find_all();

        foreach ($result as $obj) {
            $parent = DB::select()->from('catalog_tree')->where('import_id', '=', $obj->parent_id)->find();


            $model = [];
            $model['parent_id'] = $parent->id;

            DB::update('catalog')->set($model)->where('id', '=', $obj->id)->execute();
        }
    }
}