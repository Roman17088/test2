<? require_once __DIR__ . '/../_header.php'; ?>
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="contacts">
                <div class="item item-phone">
                    <div class="flex">
                        <div class="phone">
                            <b>Phone 01:</b>
                            +15-890-979-25-52
                        </div>
                        <div class="phone">
                            <b>Phone 02:</b>
                            +15-890-979-25-52
                        </div>
                    </div>
                </div>
                <div class="item item-email">
                    <b>Email 01:</b>
                    tuanna.design@gmail.com
                </div>
                <div class="item item-address">
                    <b>Address 01:</b>
                    40 Baria Sreet 133/2 NewYork City, US
                </div>
            </div>

            <form class="form" action="">
                <div class="title">Drop Us A Line</div>

                <input type="text" placeholder="Name">
                <input type="text" placeholder="Email">
                <input type="text" placeholder="Website">
                <textarea placeholder="Message"></textarea>

                <button class="btn btn-md uppercase" type="submit">send messages</button>
            </form>
        </div>
        <div class="col-md-4 col-sm-12">
            <? require_once __DIR__ . '/../_sidebar.php' ?>
        </div>
    </div>
<? require_once __DIR__ . '/../_footer.php'; ?>