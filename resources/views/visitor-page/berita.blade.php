@extends('visitor-layout.main')

@section('content')

    <section id="banner-page" style="background-image: url('https://images.pexels.com/photos/416920/pexels-photo-416920.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size:cover; background-position: center;">
        <div class="container">
            <h4>
                Berita {{ Request::is('berita-umum') ? 'Umum' : 'Analisis' }}
            </h4>
        </div>
    </section>

    <section id="berita">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="">
                                <div class="card-lsp">
                                    <img src="https://images.pexels.com/photos/5905445/pexels-photo-5905445.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="">
                                    <div class="info">
                                        <div class="bag">
                                            <div class="judul">
                                                Judul
                                            </div>
                                            <div class="keterangan">
                                                <div class="tanggal">
                                                    <i class="fas fa-calendar-alt" style="margin-right: 5px"></i>Hari, dd MMM yyy
                                                </div>
                                                <div class="reader">
                                                     <i class="fas fa-eye"></i> 99
                                                </div>
                                                <div class="penulis">
                                                    <i class="fas fa-pencil-alt"></i> by xxx
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="isi">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat sequi nobis cum eos voluptatibus cumque laudantium accusantium quo vel. Nostrum distinctio voluptas aliquam architecto non quasi laboriosam eaque. Corporis autem, aspernatur iusto vitae culpa animi fugiat? Pariatur id veritatis debitis perspiciatis, unde dolores eum perferendis dicta excepturi, sapiente, totam obcaecati!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-12">
                            <a href="">
                                <div class="card-lsp">
                                    <img src="https://images.pexels.com/photos/37347/office-sitting-room-executive-sitting.jpg?auto=compress&cs=tinysrgb&w=1600" alt="">
                                    <div class="info">
                                        <div class="bag">
                                            <div class="judul">
                                                Judul
                                            </div>
                                            <div class="keterangan">
                                                <div class="tanggal">
                                                    <i class="fas fa-calendar-alt" style="margin-right: 5px"></i>Hari, dd MMM yyy
                                                </div>
                                                <div class="reader">
                                                     <i class="fas fa-eye"></i> 99
                                                </div>
                                                <div class="penulis">
                                                    <i class="fas fa-pencil-alt"></i> by xxx
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="isi">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae est, nesciunt minima eaque, dolorem impedit at consectetur quod asperiores ipsam dolore nobis tempore magni illo ducimus voluptates delectus numquam magnam veritatis officia fugiat alias. Obcaecati nobis unde vero sint? Magnam veniam exercitationem temporibus ipsa nulla aut, aliquam maiores voluptas sapiente?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="sidebar-berita">
                        <div class="bag">
                            <div class="section-title">
                                Berita Umum
                            </div>
                            <hr>
                            <ul>
                                <li>
                                    <a href="">Judul Berita 1</a>
                                </li>
                                <li>
                                    <a href="">Judul Sebuah Berita 2</a>
                                </li>
                                <li>
                                    <a href="">Judul Dari Berita 3</a>
                                </li>
                            </ul>
                        </div>
                        <div class="bag">
                            <div class="section-title">
                            Berita Umum
                            </div>
                            <hr>
                            <ul>
                                <li>
                                    <a href="">Judul Berita 1</a>
                                </li>
                                <li>
                                    <a href="">Judul Sebuah Berita 2</a>
                                </li>
                                <li>
                                    <a href="">Judul Dari Berita 3</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection