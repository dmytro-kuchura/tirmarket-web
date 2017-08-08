<?php use Core\HTML; ?>

<div class="sidebar">
    <form class="js-filter" data-form>
        <div class="sidebar__section sidebar__section--header">
            <div class="_flex _items-center _justify-between">
                <div class="title title--md"><?php echo __('Фильтр товаров'); ?></div>
                <a href="#" class="_lg-hide" data-toggle-trigger="false" data-toggle-ns="filter"
                   data-toggle-text='["Скрыть", "Показать"]'><?php echo __('Показать'); ?></a>
            </div>
        </div>
        <div class="_lg-show" data-toggle-target="slide" data-toggle-ns="filter">
            <div class="sidebar__section _pt-0">
                <div class="title title--sm _mb-3">Производитель</div>
                <div class="form-element form-element--check _mb-2">
                    <label>
                        <input type="checkbox" name="producer" value="1"> <i>
                            <svg>
                                <use xlink:href="<?php echo HTML::media('icons/icons.svg#check', false); ?>"></use>
                            </svg>
                        </i><span>Mannol</span>
                    </label>
                </div>
                <div class="form-element form-element--check _mb-2">
                    <label>
                        <input type="checkbox" name="producer" value="2"> <i>
                            <svg>
                                <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                            </svg>
                        </i><span>Motul</span>
                    </label>
                </div>
                <div class="form-element form-element--check _mb-2">
                    <label>
                        <input type="checkbox" name="producer" value="3"><i>
                            <svg>
                                <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                            </svg>
                        </i><span>Liqui Moly</span>
                    </label>
                </div>
                <div class="form-element form-element--check _mb-2">
                    <label>
                        <input type="checkbox" name="producer" value="4"><i>
                            <svg>
                                <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                            </svg>
                        </i><span>PEMCO</span>
                    </label>
                </div>
                <div class="form-element form-element--check _mb-2">
                    <label>
                        <input type="checkbox" name="producer" value="5"><i>
                            <svg>
                                <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                            </svg>
                        </i><span>EUROL</span>
                    </label>
                </div>
                <div class="form-element form-element--check _mb-2">
                    <label>
                        <input type="checkbox" name="producer" value="6"><i>
                            <svg>
                                <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                            </svg>
                        </i><span>Mobil</span>
                    </label>
                </div>
                <div class="form-element form-element--check _mb-2">
                    <label>
                        <input type="checkbox" name="producer" value="7"><i>
                            <svg>
                                <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                            </svg>
                        </i><span>WOLF OIL</span></label></div>
                <div class="form-element form-element--check _mb-2">
                    <label>
                        <input type="checkbox" name="producer" value="8"><i>
                            <svg>
                                <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                            </svg>
                        </i><span>Nanoprotec</span>
                    </label>
                </div>
                <div class="form-element form-element--check _mb-2">
                    <label>
                        <input type="checkbox" name="producer" value="9"> <i>
                            <svg>
                                <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                            </svg>
                        </i><span>ZIC</span>
                    </label>
                </div>
                <div class="form-element form-element--check _mb-2">
                    <label>
                        <input type="checkbox" name="producer" value="10"><i>
                            <svg>
                                <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                            </svg>
                        </i><span>Bizol</span>
                    </label>
                </div>
            </div>
            <div class="sidebar__section">
                <div class="title title--sm _mb-3"><?php echo __('Цена'); ?></div>
                <div class="form-element">
                    <div data-range="[100,10000,2000,8000]" data-ns="price"></div>
                    <input type="hidden" name="price-from" data-ns="price[0]">
                    <input type="hidden" name="price-to" data-ns="price[1]">
                </div>
            </div>
            <div class="sidebar__section">
                <div class="title title--sm _mb-3">Вязкость SAE</div>
                <div class="_flex _grid-2 _grid-space-3">
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="viscosity" value="1">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>0W-40</span></label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="viscosity" value="2">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>10W-40</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="viscosity" value="3">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>5W-30</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="viscosity" value="4">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>15W-40</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="viscosity" value="5">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>5W-40</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="viscosity" value="6">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>75W-80</span></label></div>
                    <div class="form-element form-element--check _mb-2">
                        <label><input type="checkbox" name="viscosity" value="7">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>5W-50</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="viscosity" value="8">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>75W-90</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="viscosity" value="9">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>10W-30</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="viscosity" value="10">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>80W-90</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="sidebar__section">
                <div class="title title--sm _mb-3">Ёмкость</div>
                <div class="_flex _grid-2 _grid-space-3">
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="capacity" value="1">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>1 л</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="capacity" value="2">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>2 л</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="capacity" value="3">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>3 л</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="capacity" value="4">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>5 л</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="capacity" value="5">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>6 л</span></label></div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="capacity" value="6">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>10 л</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="capacity" value="7">
                            <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>20 л</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="sidebar__section">
                <div class="title title--sm _mb-3">Тип двигателя</div>
                <div class="_flex _grid-2 _grid-space-3">
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="type" value="1"><i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>Бензин</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="type" value="2"><i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>Дизель</span></label></div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="type" value="3"> <i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>Турбодизель</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="type" value="4"><i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>Газ</span></label></div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="type" value="5"><i>
                                <svg>
                                    <use xlink:href=<?php echo HTML::media('icons/icons.svg#check', false); ?>></use>
                                </svg>
                            </i><span>2-х тактный</span>
                        </label>
                    </div>
                    <div class="form-element form-element--check _mb-2">
                        <label>
                            <input type="checkbox" name="type" value="6"><i>
                                <svg>
                                    <use xlink:href="<?php echo HTML::media('icons/icons.svg#check', false); ?>"></use>
                                </svg>
                            </i><span>4-х тактный</span></label></div>
                </div>
            </div>
            <div class="sidebar__section _text-center _p-4">
                <button type="reset" class="reset-trigger">
                    <span>
                        <i>
                            <svg><use xlink:href="<?php echo HTML::media('icons/icons.svg#cancel', false); ?>"></use></svg>
                        </i>
                        <span>Очистить фильтр</span>
                    </span>
                </button>
            </div>
        </div>
    </form>
</div>