@extends('visitor-layout.main')

@section('content')

    <section id="banner-page" style="background-image: url('https://images.pexels.com/photos/416920/pexels-photo-416920.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size:cover; background-position: center;">
        <div class="container">
            <h4>
                Jadwal
            </h4>
        </div>
    </section>

    <section id="arti-lambang">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-text">@</span>
                        <select class="form-select" aria-label="Default select example">
                            <option hidden>Tipe Uji</option>
                            <option value="1">Weekend</option>
                            <option value="2">Non-Weekend</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-text">@</span>
                        <select class="form-select" aria-label="Default select example">
                            <option hidden>Bidang Uji</option>
                            <option value="1">RMC</option>
                            <option value="2">Audit</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-text">@</span>
                        <select class="form-select" aria-label="Default select example">
                            <option hidden>Level</option>
                            <option value="1">Level 1</option>
                            <option value="2">Level 2</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        <input type="text" class="datepicker_input form-control" placeholder="Date input 3 placeholder" required aria-label="Date input 3 (using aria-label)">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    
@endsection