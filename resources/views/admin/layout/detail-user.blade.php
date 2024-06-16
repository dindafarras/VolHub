@include('admin.layout.templates.header')
@include('admin.layout.templates.sidebar')
@include('admin.layout.templates.navbar') 

<!-- ========== section start ========== -->
<section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Informasi Detail Pengguna</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Page
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <div class="invoice-wrapper">
            <div class="row">
              <div class="col-12">
                <!-- ========= card-style-4 start ========= -->
                <div class="card-style-4 profile">
                  <div class="card-image">
                    <a href="#0">
                      <img
                        src="{{asset('storage/foto-profile/'.$user->foto_profile)}}"
                        alt="Foto Profile User"
                      />
                    </a>
                  </div>
                  <div class="profile-data">
                    <div class="profile-user-name">
                      <h3 class="text-gray mb-10">Nama</h3>
                      <p class="fw-bold text-black">{{$user->nama_user}}</p>
                    </div>
                    <div class="profile-user-domisili">
                      <h3 class="text-gray mb-10">Domisili</h3>
                      <p class="fw-bold text-black">{{$user->domisili}} Indonesia</p>
                    </div>
                    <div class="profile-user-gender">
                      <h3 class="text-gray mb-10">Gender</h3>
                      <p class="fw-bold text-black">{{$user->gender}}</p>
                    </div>
                    <div class="profile-user-pendidikan">
                      <h3 class="text-gray mb-10">Pendidikan Terakhir</h3>
                      <p class="fw-bold text-black">{{$user->pendidikan_terakhir}}</p>
                    </div>
                    <div class="profile-user-usia">
                      <h3 class="text-gray mb-10">Usia</h3>
                      <p class="fw-bold text-black">{{$user->usia}} Tahun</p>
                    </div>
                  </div>
                </div>
                <!-- ========= card-style-4 end ========= -->
              </div>
              <!-- ENd Col -->
              <div class="col-lg-6">
                <!-- end card -->
                <div class="card-style mb-30 mt-25">
                  <h1 class="mb-30 text-medium">Kemampuan</h1>

                  <ul class="custom-list">
                    <?php $no = 1 ?>
                    @foreach($user->skills as $skill)
                    <li>{{$skill->nama_skill}}</li>
                    @endforeach
                  </ul>
                </div>
                <!-- end card -->
              </div>
              <div class="col-lg-6">
                <!-- end card -->
                <div class="card-style mb-30 mt-25">
                  <h1 class="mb-30 text-medium">Kontak</h1>

                  <div class="profile-user-name">
                    <h3>Email</h3>
                    <p>{{$user->email_user}}</p>
                  </div>
                  <div class="profile-user-domisili mt-20">
                    <h3>Nomor Telephone</h3>
                    <p>{{$user->nomor_telephone}}</p>
                </div>
                <!-- end card -->
              </div>
            </div>
            <!-- End Row -->
          </div>
        </div>
        <div class="invoice-card card-style mb-30">
          <div class="invoice-header">
            <div class="invoice-for">
              <h2 class="mb-10">Lampiran</h2>
            </div>
          </div>
          <div class="invoice-address">
            <div class="address-item">
              <h5 class="text-bold">CV</h5>
              <a href="{{ asset('storage/cv/' . auth()->user()->cv) }}" target="_blank" class="d-flex align-items-center text-primary text-decoration-none" download>
                <img src="{{ asset('img/pdf.png')}}" alt="PDF Icon" class="me-2" width="20" height="20"/> {{$user->cv}}
              </a>
            </div>
            <div class="address-item">
              <h5 class="text-bold">Bio</h5>
              <p class="text-sm">
                {{$user->bio}}
              </p>
            </div>
          </div>
          <div class="address-item">
            <h5 class="text-bold">Deskripsi</h5>
            <p class="text-sm">
              {{$user->deskripsi}}
            </p>
          </div>
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

@include('admin.layout.templates.footer')