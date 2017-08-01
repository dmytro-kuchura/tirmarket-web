<?php use Core\HTML; ?>
<div class="_flex _grid-space-3">
    <div class="_col-12 _lg-col-5 _xl-col-4 _flex-grow-0 _mb-3">
        <div class="product-gallery">
            <div class="product-labels">
                <div class="label label--orange"><span>акция</span></div>
                <div class="label label--purple"><span>популярный</span></div>
                <div class="label label--green"><span>новинка</span></div>
            </div>
            <div class="product-image" data-slider="product">
                <?php foreach ($images as $im): ?>
                    <div class="product-image__item"><img
                                src="<?php echo HTML::media('images/catalog/main/' . $im->image, false); ?>"
                                alt=""></div>
                <?php endforeach; ?>
            </div>
            <div class="product-thumbs" data-slider="product-thumb">
                <?php foreach ($images as $im): ?>
                    <div class="product-thumbs__item"><img
                                src="<?php echo HTML::media('images/catalog/thumb/' . $im->image, false); ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="_col-12 _lg-col-7 _xl-col-5 _flex-grow-0 _flex-shrink-0 _mb-3">
        <div class="title _mb-3"><?php echo $obj->name; ?></div>
        <div class="product-meta _mb-4">
            <div class="_flex">
                <div class="_col-6">
                    <?php if ($obj->available == 1): ?>
                        <div class="iproduct-exist product-exist--true">В наличии</div>
                    <?php else: ?>
                        <div class="product-exist product-exist--false">Нет в наличии</div>
                    <?php endif; ?>
                </div>
                <div class="_col-6">
                    <div class="product-code">Артикул: <?php echo $obj->artikul; ?></div>
                </div>
            </div>
            <div class="divider _mt-2 _mb-2"></div>
            <div class="_flex _items-center">
                <div class="_col-6">
                    <div class="product-maker">Производитель: <a href="#">LiquiMoly</a></div>
                </div>
                <div class="_col-6">
                    <a href="#" class="favorite-button">
                        <i class="icon icon--sm icon--blue _mr-2">
                            <svg>
                                <use xlink:href="icons/icons.svg#star"></use>
                            </svg>
                        </i><span>В избранное</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="product-handler">
            <div class="_pl-3 _pr-3 _pt-3 _pb-2">
                <div class="_flex _justify-between _grid-space-3 _items-end">
                    <div class="_col-auto _mb-2">
                        <div class="product-price product-price--disable">1 530 грн.</div>
                        <div class="product-price">1 080 грн.</div>
                    </div>
                    <div class="_col-auto _mb-2">
                        <div class="product-counter" data-counter data-binding="product">
                            <input type="text" value="1" readonly="readonly" class="product-counter__field" data-counter-value>
                            <div class="product-counter__increment" data-counter-trigger="increment"></div>
                            <div class="product-counter__decrement" data-counter-trigger="decrement"></div>
                        </div>
                    </div>
                    <div class="_col-auto _mb-2">
                        <div class="_flex _flex-column">
                            <a href="#" class="one-click-button _mb-2"
                               data-mfp="popups/oneclick.php"
                               data-param='{"id": "<?php echo $obj->id; ?>"}'>
                                <i class="icon icon--sm icon--blue _mr-2">
                                    <svg>
                                        <use xlink:href="icons/icons.svg#cursor"></use>
                                    </svg>
                                </i>
                                <span>Купить в ОДИН КЛИК</span>
                            </a>
                            <a href="#" class="button" data-basket-trigger data-id="<?php echo $obj->id; ?>" data-binding="product">
                                <span>
                                    <i>
                                        <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="icons/icons.svg#cart"></use></svg>
                                    </i>
                                    <span>В корзину</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider divider--white"></div>
            <div class="_p-3">
                <div class="product-discount">При заказке от <span
                            class="product-discount__count">10 шт</span>: Цена - <span
                            class="product-discount__price">121 000 грн.</span></div>
            </div>
        </div>
    </div>
    <div class="_col-12 _xl-col-3 _flex-grow-0 _mb-3">
        <div class="_p-4" style="background-color: #f8f8f8">
            <div class="_flex _items-center _mb-2"><i class="icon icon--md icon--grey _mr-3">
                    <svg>
                        <use xlink:href="icons/icons.svg#delivery"></use>
                    </svg>
                </i>
                <div class="title title--ms">Доставка</div>
            </div>
            <div class="wysiwyg _mb-3">
                <ul>
                    <li>Доставка “Новой почтой”, “Интайм”, "Delivery", "Гюнсел", "Автолюкс", "САТ"</li>
                    <li>Cамовывоз в городах: Киев, Луцк, Житомир, Ковель</li>
                </ul>
            </div>
            <div class="_flex _items-center _mb-2"><i class="icon icon--md icon--grey _mr-3">
                    <svg>
                        <use xlink:href="icons/icons.svg#payment"></use>
                    </svg>
                </i>
                <div class="title title--ms">Оплата</div>
            </div>
            <div class="wysiwyg _mb-3">
                <ul>
                    <li>Наложенным платежом</li>
                    <li>Наличными при получении на складе</li>
                </ul>
            </div>
            <div class="_flex _items-center _mb-2"><i class="icon icon--md icon--grey _mr-3">
                    <svg>
                        <use xlink:href="icons/icons.svg#warranty"></use>
                    </svg>
                </i>
                <div class="title title--ms">Гарантия</div>
            </div>
            <div class="wysiwyg _mb-3"><p>vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                    vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p></div>
            <div class="_flex _items-center _mb-2"><i class="icon icon--md icon--grey _mr-3">
                    <svg>
                        <use xlink:href="icons/icons.svg#refund"></use>
                    </svg>
                </i>
                <div class="title title--ms">Возврат</div>
            </div>
            <div class="wysiwyg _mb-3"><p>vulputate, felis tellus mollis orci, sed rhoncus sapien nunc
                    eget.</p></div>
            <div><a href="#">Подробнее о доставке и оплате</a></div>
            <div><a href="#">Подробнее о гарантии и возврате</a></div>
        </div>
    </div>
</div>
<div class="_flex _mb-4"><a href="#" class="tab-link is-active" data-tab-trigger="1" data-tab-ns="product">Характеристики</a>
    <a href="#" class="tab-link" data-tab-trigger="2" data-tab-ns="product">Описание</a> <a href="#"
                                                                                            class="tab-link"
                                                                                            data-tab-trigger="3"
                                                                                            data-tab-ns="product">Аналоги</a>
</div>
<div class="_mb-5">
    <div class="is-active" data-tab-content="1" data-tab-ns="product">
        <div class="wysiwyg">
            <table class="table-zebra">
                <tr>
                    <td><b>Вязкость по</b></td>
                    <td>5W-40</td>
                </tr>
                <tr>
                    <td><b>Емкость</b></td>
                    <td>1 л</td>
                </tr>
                <tr>
                    <td><b>Тип двигателя</b></td>
                    <td>Дизель</td>
                </tr>
                <tr>
                    <td><b>Тип основы масла</b></td>
                    <td>Синтетическое</td>
                </tr>
                <tr>
                    <td><b>Назначение</b></td>
                    <td>Моторное масло</td>
                </tr>
                <tr>
                    <td><b>Категория</b></td>
                    <td>Легковые</td>
                </tr>
                <tr>
                    <td><b>Допуски</b></td>
                    <td>ОЕМ</td>
                </tr>
                <tr>
                    <td><b>Спецификации</b></td>
                    <td>BMW Longlife Oil 04 ; Fiat 9.55535 - S2 ; Ford WSS-M2C917-A</td>
                </tr>
                <tr>
                    <td><b>Спецификации</b></td>
                    <td>API SM/CF</td>
                </tr>
                <tr>
                    <td><b>Страна-производитель</b></td>
                    <td>Германия</td>
                </tr>
                <tr>
                    <td><b>Гарантия</b></td>
                    <td>14 дней</td>
                </tr>
            </table>
        </div>
    </div>
    <div data-tab-content="2" data-tab-ns="product">
        <div class="wysiwyg"><p><b>Mobil Super</b> — масла премиум-класса. Они разработаны специально для
                того, чтобы обеспечить отличную защиту двигателя и его надежную работу, что позволяет вам
                ездить
                с полной уверенностью.</p>
            <p><b>Масло Mobil Super 3000 x1 Formula FE 5W-30</b> — это синтетическое моторное масло,
                предназначенное для продления срока службы двигателя в автомобилях различного типа и
                возраста и обеспечивающее отличную защиту в широком температурном диапазоне.</p>
            <p>Характеристики и преимущества</p>
            <p>Эффективность использования масел Mobil Super 3000 в автомобилях доказана, и можно быть
                уверенным, что автомобиль достигнет того уровня эксплуатационных свойств, который от него
                ожидается.</p>
            <p>Масла Mobil Super 3000 разработаны таким образом, чтобы предоставить дополнительный уровень
                защиты по сравнению с минеральными и полусинтетическими маслами. ExxonMobil рекомендует
                применять Mobil Super 3000 x1 5W-30, когда регулярно возникают сложные условия вождения,
                чтобы предотвратить повреждения от интенсивных и частых нагрузок.</p>
            <p>Mobil Super 3000 x1 Formula FE 5W-30 может применяться в различных автомобилях с бензиновыми
                и дизельными двигателями, малотоннажных грузовиках и микроавтобусах, в которых обычно
                рекомендованы моторные масла с низкой вязкостью (HTHS). Mobil Super 3000 x1 Formula FE 5W-30
                разработано в первую очередь согласно требованиям стандарта Ford, но пригодно и для
                применения в двигателях автомобилей других марок с соответствующими требованиями к вязкости
                и качеству.</p></div>
    </div>
    <div data-tab-content="3" data-tab-ns="product">
        <analogue-list data-vue="true" inline-template>
            <div>
                <div class="analogue-table" v-if="width > 1280">
                    <div class="analogue-table__row analogue-table__row--header">
                        <div class="analogue-table__col">Товар</div>
                        <div class="analogue-table__col">Артикул</div>
                        <div class="analogue-table__col">Оригинальны номер</div>
                        <div class="analogue-table__col">Производитель</div>
                        <div class="analogue-table__col">Цена</div>
                        <div class="analogue-table__col">Наличие</div>
                        <div class="analogue-table__col"></div>
                    </div>
                    <table-row v-for="item in list" :item="item" :key="item.id"></table-row>
                </div>
                <div v-else class="_flex _grid-space-3">
                    <item-card v-for="item in list" :data="item"></item-card>
                </div>
            </div>
        </analogue-list>
    </div>
</div>