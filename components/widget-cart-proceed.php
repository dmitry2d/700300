
<section class="card-proceed">
    
    <a href="" class="d-block text-black mt-5 mb-4">← Вернуться в корзину</a>

    <div class="text-center mb-4">
        <span class="bg-danger text-white fs-2 fw-bold px-4 py-1 text-uppercase">
            Оформление заказа
        </span>
    </div>





    <form class='border-black'>

        <h3 class="mt-4">Личная информация</h3>

        <div class="row row-cols-1 row-cols-xl-3">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">ФИО</label>
                    <input name="fio" type="text" class="form-control" id="exampleInputEmail1">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail2">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputEmail3" class="form-label">Телефон</label>
                    <input name="phone" type="phone" class="form-control" id="exampleInputEmail3">
                </div>
            </div>
        </div>

        <h3 class="mt-4">Адрес доставки</h3>

        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Улица</label>
                    <input name="street" type="text" class="form-control" id="exampleInputEmail1">
                </div>
            </div>
            <div class="col-6 col-md-2">
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Дом</label>
                    <input name="" type="email" class="form-control" id="exampleInputEmail2">
                </div>
            </div>
            <div class="col-6 col-md-2">
                <div class="mb-3">
                    <label for="exampleInputEmail3" class="form-label">Кв.(офис)</label>
                    <input name="" type="phone" class="form-control" id="exampleInputEmail3">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="exampleInputEmail3" class="form-label">Примечание</label>
                    <input name="" type="phone" class="form-control" id="exampleInputEmail3">
                </div>
            </div>
        </div>

        <h3 class="mt-4 mb-4">Способ доставки и оплата</h3>

        <div class="row">
            <div class="col-4">
                <h5 class="text-secondary">Способ доставки</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="deliveryType" id="inlineRadio1" value="option1" checked>
                    <label class="form-check-label" for="inlineRadio1">Курьером</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="deliveryType" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Самовывоз</label>
                </div>
            </div>
            <div class="col-4">
                <h5 class="text-secondary">Время доставки</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="deliveryTime" id="inlineRadio3" value="option1" checked>
                    <label class="form-check-label" for="inlineRadio3">Сейчас</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="deliveryTime" id="inlineRadio4" value="option2">
                    <label class="form-check-label" for="inlineRadio4">В другое время</label>
                </div>
            </div>
            <div class="col-4">
                <h5 class="text-secondary">Способ оплаты</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="deliveryCash" id="inlineRadio5" value="option1" checked>
                    <label class="form-check-label" for="inlineRadio5">Наличные</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="deliveryCash" id="inlineRadio6" value="option2">
                    <label class="form-check-label" for="inlineRadio6">Картой</label>
                </div>
            </div>
        </div>

        <h3 class="mt-4 mb-4">Комментарий к заказу</h3>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

        <div class="text-center mt-5 pb-5">
            <div class="h2">18445.0 руб.</div>
            <button type="submit" class="btn btn-outline-danger border-4 fs-3 px-5">Оформить</button>
        </div>

        <hr class="my-5">

    </form>

</section>