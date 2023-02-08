<main id="main" >

    <!-- ======= Booking Section ======= -->
    <section id="booking">
        <div class="container" data-aos="fade-up">
            <div class="p-4 shadow" style="background-color:#2f4f4f; border-radius: 10px">
                <div class="container">
                    <h3 class="text-light mb-3">Tìm chuyến bay</h3>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" onclick="check();" type="radio" name="flexRadioDefault" id="oneway" checked>
                        <label class="form-check-label text-light" for="flexRadioDefault1">
                            Một chiều
                        </label>
                    </div>
                    <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" onclick="check();" type="radio" name="flexRadioDefault" id="roundtrip">
                        <label class="form-check-label text-light" for="flexRadioDefault2">
                            Khứ hồi
                        </label>
                    </div>
                    <div class="row gy-2">
                        <div class="col-lg-5 col-md-12">
                            <div class="form-group bg-white p-3" style="border-radius: 10px">
                                <label class="mb-1" for="from">Điểm đến</label>
                                <div class="input-group" id="form-from">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-airplane-engines"></i>
                                        </span>
                                    </div>
                                    <select id="from" class="selectpicker form-control" title="Thành phố hoặc sân bay" data-live-search="true" placeholder="Điểm đến" data-search="true">
                                        <option value="Hồ Chí Minh (SGN)">Hồ Chí Minh (SGN)</option>
                                        <option value="Cam Ranh (CXR)">Cam Ranh (CXR)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 align-self-center text-center">
                            <button class="btn btn-light btn-lg" onclick="SwapPlace();">
                                <i class="bi bi-arrow-left-right"></i>
                            </button>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="form-group bg-white p-3" style="border-radius: 10px">
                                <label class="mb-1" for="from">Điểm đi</label>
                                <div class="input-group" id="form-to">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-airplane-engines"></i>
                                        </span>
                                    </div>
                                    <select class="selectpicker form-control" title="Thành phố hoặc sân bay" id="to" data-live-search="true" placeholder="Điểm đến">
                                        <option value="Hồ Chí Minh (SGN)">Hồ Chí Minh (SGN)</option>
                                        <option value="Cam Ranh (CXR)">Cam Ranh (CXR)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group bg-white p-3" style="border-radius: 10px">
                                <label class="mb-1" for="from">Ngày đi</label>
                                <div class="form-group">
                                    <div class="datepicker date input-group">
                                        <input type="text" placeholder="Choose Date" class="form-control" id="fecha1">
                                        <div class="input-group-append">
                                            <span class="input-group-text mb-0">
                                                <i class="bi bi-calendar3"></i>   
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>           
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group bg-white p-3" style="border-radius: 10px">
                                <label class="mb-1" for="from">Ngày về</label>
                                <div class="form-group">
                                    <div class="datepicker date input-group">
                                        <input type="text" placeholder="Choose Date" class="form-control" id="returndate" disabled>
                                        <div class="input-group-append">
                                            <span class="input-group-text mb-0">
                                                <i class="bi bi-calendar3"></i>   
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>           
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="form-group bg-white p-3" style="border-radius: 10px">
                                <label class="mb-1" for="from">Người lớn (> 12t)</label>
                                <div class="mt-1">
                                    <button onclick="DecreaseAdult()" class="btn btn-light btn-sm" style="border-radius: 100%">-</button>
                                    <input id="adultQuantity" class="text-center align-middle border-none p-0" style="width: 30px;border-style: none;" for="adultquantity" name="adultquantity" value="1"/>
                                    <button onclick="IncreaseAdult()" class="btn btn-light btn-sm" style="border-radius: 100%">+</button>
                                </div>
                            </div>           
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="form-group bg-white p-3" style="border-radius: 10px">
                                <label class="mb-1" for="from">Trẻ em (2 - 12t)</label>
                                <div class="mt-1">
                                    <button onclick="DecreaseChild()" class="btn btn-light btn-sm" style="border-radius: 100%">-</button>
                                    <input id="childQuantity" class="text-center align-middle border-none p-0" style="width: 30px;border-style: none;" for="childquantity" name="childquantity" value="1"/>
                                    <button onclick="IncreaseChild()" class="btn btn-light btn-sm" style="border-radius: 100%">+</button>
                                </div>
                            </div>           
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="form-group bg-white p-3" style="border-radius: 10px">
                                <label class="mb-1" for="from">Em bé (< 2t)</label>
                                <div class="mt-1">
                                    <button onclick="DecreaseBaby()" class="btn btn-light btn-sm" style="border-radius: 100%">-</button>
                                    <input id="babyQuantity" class="text-center align-middle border-none p-0" style="width: 30px;border-style: none;" for="babyquantity" name="babyquantity" value="1"/>
                                    <button onclick="IncreaseBaby()" class="btn btn-light btn-sm" style="border-radius: 100%">+</button>
                                </div>
                            </div>           
                        </div>
                        <div class="col-12">
                            <button class="btn btn-success float-end" style="width: 10%">
                                Tìm
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <h2 class="text-center text-light">ĐIỂM ĐẾN VIỆT NAM PHỔ BIẾN</h2>
            <div class="row gy-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="image1 text-center">
                        <span class="text-light tripname">Hà Nội</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="image2 text-center">
                        <span class="text-light tripname">Đà nẵng</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="image3 text-center">
                        <span class="text-light tripname">Hội An</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="image4 text-center">
                        <span class="text-light tripname">Đà Lạt</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="image5 text-center">
                        <span class="text-light tripname">Nha Trang</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="image6 text-center">
                        <span class="text-light tripname">Phú Quốc</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="image7 text-center">
                        <span class="text-light tripname">Sa Pa</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="image8 text-center">
                        <span class="text-light tripname">Hồ Chí Minh</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    function check(){
        if($("#oneway").prop("checked")){
            $("#returndate").prop("disabled", true);
        }else{
            $("#returndate").prop("disabled", false);
        }
    }
    function IncreaseAdult(){
        var quantity = $("#adultQuantity").val();
        if(quantity < 7){
            quantity++;
        }
        $("#adultQuantity").val(quantity)
    }
    function DecreaseAdult(){
        var quantity = $("#adultQuantity").val();
        if(quantity > 1){
            quantity--;
        }
        $("#adultQuantity").val(quantity)
    }
    function IncreaseChild(){
        var quantity = $("#childQuantity").val();
        if (quantity < 4){
            quantity++;
        }
        $("#childQuantity").val(quantity)
    }
    function DecreaseChild(){
        var quantity = $("#childQuantity").val();
        if(quantity > 1){
            quantity--;
        }
        $("#childQuantity").val(quantity)
    }
    function IncreaseBaby(){
        var quantity = $("#babyQuantity").val();
        if(quantity < 4){
            quantity++;
        }
        $("#babyQuantity").val(quantity)
    }
    function DecreaseBaby(){
        var quantity = $("#babyQuantity").val();
        if(quantity > 1){
            quantity--;
        }
        $("#babyQuantity").val(quantity)
    }
    $(function () {
        $('.datepicker').datepicker({
            language: "es",
            autoclose: true,
            format: "dd/mm/yyyy"
        });
    });
    function SwapPlace(){
        const x = $("#form-to button div div div").text();
        const y = $("#form-from button div div div").text();
        const from = document.getElementById("from").selectedIndex;
        const to = document.getElementById("to").selectedIndex;
        document.getElementById("from").selectedIndex = to;
        document.getElementById("to").selectedIndex = from;
        $("#form-to button div div div").text(y);
        $("#form-from button div div div").text(x);
    }
</script>