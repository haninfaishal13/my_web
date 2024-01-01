@extends('wedding._layout.main')
@section('wedding-title', 'Aulia - Hanin')
@section('wedding-content')
    {{-- Front Page --}}
    <div id="cover" class="cover-page">
        {{-- <div class="fullpage image-cover d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-body justify-content-center text-center">
                                <div class="header">
                                    <h2 style="font-weight:bold;">Aulia</h2>
                                    <h4 style="font-weight:bold">&</h4>
                                    <h2 style="font-weight:bold;"> Hanin</h2>
                                </div>
                                <div class="date">
                                    <hr>
                                    <span>20 | 01 | 2024</span>
                                    <hr>
                                </div>
                                <img src="{{asset('assets/image/wedding/flower_draw/flower_6_reverse.png')}}" class="image-ornament-right" alt="" width="150">
                                <div class="receiver">
                                    <p class="mb-0">Kepada:</p>
                                    <h4>{{ strlen(app('request')->input('to')) > 0 ?
                                        app('request')->input('to') :
                                        'Lorem Ipsum'  }}
                                    </h4>
                                    <button class="btn btn-secondary" id="open-invitation">
                                        Open Invitation
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ################################## --}}
        <div class="fullpage image-cover justify-content-center text-center pt-5 bg-pink">
            <img src="{{asset('assets/image/wedding/flower_pink/flower_pink_5_mirror_rotate.png')}}" class="bg-flower-1" width = 500>
            <div class="container">
                <div class="header">
                    <h2 class="font-scmt font-bold">Aulia</h2>
                    <h4 class="font-scmt font-bold">&</h4>
                    <h2 class="font-scmt font-bold"> Hanin</h2>
                </div>
                <div class="date">
                    <hr>
                    <span>20 | 01 | 2024</span>
                    <hr>
                </div>
                <div class="receiver">
                    <p class="mb-0">Kepada:</p>
                    <p style="font-size: 1.2em; font-weight:bold">{{ strlen(app('request')->input('to')) > 0 ?
                        app('request')->input('to') :
                        'Lorem Ipsum'  }}
                    </p>
                    <button class="btn btn-secondary" id="open-invitation" style="z-index:1000;">
                        Open Invitation
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="invitation-info" class="d-none">
        <audio src="{{asset('assets/music/always-with-me.mp3')}}" id="audio" loop></audio>
        {{-- Page 1: Kata Pengantar (Surat Ar-Rum : 21) --}}
        <div class="fullpage d-flex align-items-center bg-pink pos-relative">
            {{-- Welcome --}}
            <img src="{{asset('assets/image/wedding/flower_pink/flower_pink_5_mirror_rotate.png')}}" class="bg-flower-1" id="flower-1" width = 500>
            <img src="{{asset('assets/image/wedding/flower_pink/flower_pink_5_reverse.png')}}" class="bg-flower-2" id="flower-2" width = 500>
            {{-- <div class="pos-relative">
                <img src="{{asset('assets/image/wedding/flower_pink/flower_pink_5_mirror_rotate.png')}}" class="bg-flower-1" width = 500>
                <img src="{{asset('assets/image/wedding/flower_pink/flower_pink_5_reverse.png')}}" class="bg-flower-2" width = 500>
                <img src="{{asset('assets/image/wedding/flower_pink/flower_pink_2.png')}}" class="bg-flower-3" width = 500>
            </div> --}}
            <div class="container">
                {{-- <div class="welcome-flower-top">
                    <img src="{{asset('assets/image/wedding/flower_pink/flower_pink_4.png')}}" alt="" width=300; class="img-flower">
                </div> --}}
                {{-- <div class="welcome-flower-bottom">
                    <img src="{{asset('assets/image/wedding/flower_pink/flower_pink_4_mirror.png')}}" alt="" width=300; class="img-flower">
                </div> --}}
                <div class="row d-flex justify-content-center text-center mx-3">
                    <div class="col-md-6 col-12">
                        <div class="card px-3" style="border-radius:20px">
                            <div class="card-body">
                                <p class="font-small mt-5">
                                    “Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu pasangan-pasangan
                                    dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya
                                    diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat
                                    tanda-tanda bagi kaum yang berfikir.”
                                </p>
                                <p class="fw-bold">
                                    (QS Ar-Rum : 21)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="home" class="fullpage justify-content-center text-center py-5 bg-pink-mirror pos-relative">
            <img src="{{asset('assets/image/wedding/flower_pink/flower_pink_2.png')}}" class="bg-flower-3" id="flower-3" width = 500>
            <img src="{{asset('assets/image/wedding/flower_pink/flower_pink_5_reverse.png')}}" class="bg-flower-4" id="flower-4" width = 500>
            <img src="{{asset('assets/image/wedding/flower_pink/flower_pink_2.png')}}" class="bg-flower-5" id="flower-5" width = 500>
            <div class="container" id="salam">
                <div class="mx-3">
                    <h3 class="font-scmt font-bold">
                        Assalamualaikum Wr. Wb
                    </h3>
                    <p >
                        Dengan memohon Rahmat Allah Subhanahu wa Ta'ala Insya Allah kami akan menyelenggarakan acara pernikahan:
                    </p>
                </div>
            </div>
            <div class="container mt-5 pb-5">
                <div class="row">
                    <div class="col-md-5 col-12" id="bride">
                        <div class="d-flex justify-content-center">
                            <div class="bride-photo">
                                <img src="{{asset('assets/image/wedding/img_dhila.png')}}" style="width:10em;" alt="">
                            </div>
                        </div>
                        <h3 class="font-scmt font-bold mt-2">Aulia</h3>
                        <h5>Aulia Fadhilah Zahro</h5>
                        <p class="mb-0">Putri dari:</p>
                        <p class="mb-0">Bapak Dartam</p>
                        <p class="mb-0">&</p>
                        <p class="mb-0">Ibu Muliana Prapmawati</p>
                    </div>
                    <div class="col-md-2 col-12 text-center">
                        <h1 class="font-scmt font-bold" id="and">&</h1>
                    </div>
                    <div class="col-md-5 col-12" id="groom">
                        <div class="d-flex justify-content-center">
                            <div class="groom-photo">
                                <img src="{{asset('assets/image/wedding/img_hanin.png')}}" style="width:10em;" alt="">
                            </div>
                        </div>
                        <h4 class="font-scmt font-bold mt-2">Hanin</h4>
                        <h5>Faishal Hanin</h5>
                        <p class="mb-0">Putra dari:</p>
                        <p class="mb-0">Bapak Eko Suparyono</p>
                        <p class="mb-0">&</p>
                        <p class="mb-0">Ibu Susilawati</p>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
                <h3 class="mb-5 font-scmt font-bold" id="save-date">Save The Date</h3>
                <div class="row mt-5">
                    <div class="col-md-6 col-12 text center mb-3" id="akad">
                        <div class="card" style="border-radius:5px;">
                            <div class="card-body">
                                <h4 class="font-scmt font-bold">Akad Nikah</h4>
                                <p class="mb-0 fw-bold">Sabtu, 20 Januari 2023</p>
                                <p>08.00 WIB</p>
                                <a class="btn btn-secondary btn-sm" href="https://www.google.com/maps/dir//J64W%2B4RV+Masjid+Darussallam,+Jl.+Gn.+Jayawijaya,+Pabuwaran,+Pabuaran,+Kec.+Purwokerto+Utara,+Kabupaten+Banyumas,+Jawa+Tengah+53124/@-7.3946261,109.2464137,19z/data=!4m17!1m7!3m6!1s0x2e655f053bf1510f:0xd9f423e4546ac21d!2sMasjid+Darussallam!8m2!3d-7.3946274!4d109.2470574!16s%2Fg%2F11h1yvvxvy!4m8!1m0!1m5!1m1!1s0x2e655f053bf1510f:0xd9f423e4546ac21d!2m2!1d109.2470665!2d-7.3946271!3e2?entry=ttu" target="_blank">
                                    Menuju Lokasi
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 text-center mb-3" id="resepsi">
                        <div class="card" style="border-radius:5px;">
                            <div class="card-body">
                                <h4 class="font-scmt font-bold">Resepsi</h4>
                                <p class="mb-0 fw-bold">Sabtu, 20 Januari 2023</p>
                                <p>11.00 WIB</p>
                                <a class="btn btn-secondary btn-sm" href="https://www.google.com/maps/dir//J64W%2B4RV+Masjid+Darussallam,+Jl.+Gn.+Jayawijaya,+Pabuwaran,+Pabuaran,+Kec.+Purwokerto+Utara,+Kabupaten+Banyumas,+Jawa+Tengah+53124/@-7.3946261,109.2464137,19z/data=!4m17!1m7!3m6!1s0x2e655f053bf1510f:0xd9f423e4546ac21d!2sMasjid+Darussallam!8m2!3d-7.3946274!4d109.2470574!16s%2Fg%2F11h1yvvxvy!4m8!1m0!1m5!1m1!1s0x2e655f053bf1510f:0xd9f423e4546ac21d!2m2!1d109.2470665!2d-7.3946271!3e2?entry=ttu" target="_blank">
                                    Menuju Lokasi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="mt-5 font-scmt font-bold" id="countdown-acara">Countdown Menuju Acara</h4>
                <div class="simply-countdown" id="countdown"></div>
            </div>
            <div class="mt-5">
                <div class="row">
                    <div class="col-md-2 col-1"></div>
                    <div class="col-md-8 col-10">
                        <p id="terima-kasih">Atas doa restu Bapak/Ibu/Saudara/i kami mengucapkan terima kasih</p>
                    </div>
                    <div class="col-md-2 col-1"></div>
                </div>
                <h5 class="font-scmt font-bold" id="end-salam">Wassalamualaikum Wr. Wb</h5>
                <img src="{{asset('assets/image/wedding/img_couple.png')}}" class="couple-photo" id="couple-photo" alt="">
                <h5 class="mt-5" id="sincerely">Kami yang berbahagia</h5>
                <h4 class="font-scmt font-bold" id="aulia-hanin">
                    Aulia & Hanin
                </h4>
            </div>
        </div>
        {{-- Page 3: Tanggal & Lokasi --}}
        {{-- Page 4: Countdown & Harapan --}}
        {{-- Page 5: Galeri --}}
        <span class="btn-music rounded-circle" id="music" data="pause">
            <i class="fas fa-pause" id="icon-music"></i>
        </span>
    </div>
@endsection
@section('after-script')
<script>
    const checkIsMobile = isMobile();
    let salamTop = 0;
    let brideTop = 0;
    let andTop = 0;
    let groomTop = 0;
    let saveDateTop = 0;
    let akadTop = 0;
    let resepsiTop = 0;
    let countdownAcaraTop = 0;
    let countdownTop = 0;
    let terimaKasihTop = 0;
    let endSalamTop = 0;
    let couplePhotoTop = 0;
    let sincerelyTop = 0;
    let auliaHaninTop = 0;
    let flower3Top = 0;
    let flower4Top = 0;
    let flower5Top = 0;


    let loadSalam = false;
    let loadSaveDate = false;
    let loadBride = false;
    let loadAnd = false;
    let loadGroom = false;
    let loadAkad = false;
    let loadResepsi = false;
    let loadCountdownAcara = false;
    let loadCountdown = false;
    let loadTerimaKasih = false;
    let loadEndSalam = false;
    let loadCouplePhoto = false;
    let loadSincerely = false;
    let loadAuliaHanin = false;
    let loadFlower3 = false;
    let loadFlower4 = false;
    let loadFlower5 = false;
    document.getElementById('open-invitation').addEventListener('click', () => {
        // const audio = document.getElementById('audio');
        // audio.play();
        document.getElementById('cover').classList.add('invitation-open');
        document.getElementById('invitation-info').classList.remove('d-none');

        salamTop = document.getElementById('salam').offsetTop;
        groomTop = document.getElementById('groom').offsetTop;
        andTop = document.getElementById('and').offsetTop;
        brideTop = document.getElementById('bride').offsetTop;
        saveDateTop = document.getElementById('save-date').offsetTop;
        akadTop = document.getElementById('akad').offsetTop;
        resepsiTop = document.getElementById('resepsi').offsetTop;
        countdownAcaraTop = document.getElementById('countdown-acara').offsetTop;
        countdownTop = document.getElementById('countdown').offsetTop;
        terimaKasihTop = document.getElementById('terima-kasih').offsetTop;
        endSalamTop = document.getElementById('end-salam').offsetTop;
        couplePhotoTop = document.getElementById('couple-photo').offsetTop;
        sincerelyTop = document.getElementById('sincerely').offsetTop;
        auliaHaninTop = document.getElementById('aulia-hanin').offsetTop;
        flower3Top = document.getElementById('flower-3').offsetTop;
        flower4Top = document.getElementById('flower-4').offsetTop;
        flower5Top = document.getElementById('flower-5').offsetTop;

        document.getElementById('salam').classList.add('reveal');
        document.getElementById('groom').classList.add('reveal');
        document.getElementById('and').classList.add('reveal');
        document.getElementById('bride').classList.add('reveal');
        document.getElementById('save-date').classList.add('reveal');
        document.getElementById('akad').classList.add('reveal');
        document.getElementById('resepsi').classList.add('reveal');
        document.getElementById('countdown-acara').classList.add('reveal');
        document.getElementById('countdown').classList.add('reveal');
        document.getElementById('terima-kasih').classList.add('reveal');
        document.getElementById('end-salam').classList.add('reveal');
        document.getElementById('couple-photo').classList.add('reveal');
        document.getElementById('sincerely').classList.add('reveal');
        document.getElementById('aulia-hanin').classList.add('reveal');
        if(checkIsMobile) document.getElementById('flower-5').classList.add('active');
        setTimeout(() => {
            document.getElementById('flower-1').classList.add('active');
            document.getElementById('flower-2').classList.add('active');
        }, 100);
        setTimeout(() => {
            document.getElementById('cover').classList.add('d-none');
        }, 1000);
    })
    document.getElementById('music').addEventListener('click', () => {
        const musicDo = document.getElementById('music').getAttribute('data');
        // const audio = document.getElementById('audio');
        if(musicDo == "pause") {
            // audio.pause();
            document.getElementById('icon-music').classList.remove('fa-pause');
            document.getElementById('icon-music').classList.add('fa-play');
            document.getElementById('music').setAttribute('data','play');
        } else {
            // audio.play();
            document.getElementById('icon-music').classList.remove('fa-play');
            document.getElementById('icon-music').classList.add('fa-pause');
            document.getElementById('music').setAttribute('data', 'pause');
        }
    });

    window.addEventListener('scroll', () => {
        const salamDiv = document.getElementById('salam');
        const saveDateDiv = document.getElementById('save-date');
        const brideDiv = document.getElementById('bride');
        const andDiv = document.getElementById('and');
        const groomDiv = document.getElementById('groom');
        const akadDiv = document.getElementById('akad');
        const resepsiDiv = document.getElementById('resepsi');
        const countdownAcara = document.getElementById('countdown-acara');
        const countdown = document.getElementById('countdown');
        const terimaKasih = document.getElementById('terima-kasih');
        const endSalam = document.getElementById('end-salam')
        const couplePhoto = document.getElementById('couple-photo');
        const sincerely = document.getElementById('sincerely');
        const auliaHanin = document.getElementById('aulia-hanin');
        const flower3 = document.getElementById('flower-3');
        const flower4 = document.getElementById('flower-4');
        const flower5 = document.getElementById('flower-5');
        if(checkIsMobile ? (window.scrollY >= salamTop / 2) : (window.scrollY >= salamTop / 3)) {
            if(!loadSalam) {
                loadSalam = true;
            }
            if(!salamDiv.classList.contains('active')) {
                salamDiv.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY >= brideTop / 2) : (window.scrollY >= brideTop / 3)) {
            if(!loadBride) {
                loadBride = true;
            }
            if(!brideDiv.classList.contains('active')) {
                brideDiv.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY >= andTop / 2) : (window.scrollY >= andTop / 3)) {
            if(!loadAnd) {
                loadAnd = true;
            }
            if(!andDiv.classList.contains('active')) {
                andDiv.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY > groomTop / 2) : (window.scrollY > groomTop / 3)) {
            if(!loadGroom) {
                loadGroom = true;
            }
            if(!groomDiv.classList.contains('active')) {
                groomDiv.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY >= saveDateTop / 1.5) : (window.scrollY >= saveDateTop)) {
            if(!loadSaveDate) {
                loadSaveDate = true;
            }
            if(!saveDateDiv.classList.contains('active')) {
                console.log("saveDateDiv active", saveDateTop, window.scrollY);
                saveDateDiv.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY > akadTop / 1.5) : (window.scrollY > akadTop)) {
            if(!loadAkad) {
                loadAkad = true;
            }
            if(!akadDiv.classList.contains('active')) {
                akadDiv.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY > resepsiTop / 1.5) : (window.scrollY > resepsiTop)) {
            if(!loadResepsi) {
                loadResepsi = true;
            }
            if(!resepsiDiv.classList.contains('active')) {
                resepsiDiv.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY > countdownAcaraTop / 1.5) : (window.scrollY > countdownAcaraTop)) {
            if(!loadCountdownAcara) {
                loadCountdownAcara = true;
            }
            if(!countdownAcara.classList.contains('active')) {
                countdownAcara.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY > countdownTop / 1.5) : (window.scrollY > countdownTop)) {
            if(!loadCountdown) {
                loadCountdown = true;
            }
            if(!countdown.classList.contains('active')) {
                countdown.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY > terimaKasihTop / 1.5) : (window.scrollY > terimaKasihTop)) {
            if(!loadTerimaKasih) {
                loadTerimaKasih = true;
            }
            if(!terimaKasih.classList.contains('active')) {
                terimaKasih.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY > endSalamTop / 1.5) : (window.scrollY > endSalamTop)) {
            if(!loadEndSalam) {
                loadEndSalam = true;
            }
            if(!endSalam.classList.contains('active')) {
                endSalam.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY > couplePhotoTop / 1.5) : (window.scrollY > couplePhotoTop)) {
            if(!loadCouplePhoto) {
                loadCouplePhoto = true;
            }
            if(!couplePhoto.classList.contains('active')) {
                couplePhoto.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY > sincerelyTop / 1.5) : (window.scrollY > sincerelyTop)) {
            if(!loadSincerely) {
                loadSincerely = true;
            }
            if(!sincerely.classList.contains('active')) {
                sincerely.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY > auliaHaninTop / 1.5) : (window.scrollY > auliaHaninTop)) {
            if(!loadAuliaHanin) {
                loadAuliaHanin = true;
            }
            if(!auliaHanin.classList.contains('active')) {
                auliaHanin.classList.add('active');
            }
        }
        if(window.scrollY > flower3Top * 1.5) {
            if(!loadFlower3) {
                loadFlower3 = true;
            }
            if(!flower3.classList.contains('active')) {
                flower3.classList.add('active');
            }
        }
        if(window.scrollY > flower4Top * 1.5) {
            if(!loadFlower4) {
                loadFlower4 = true;
            }
            if(!flower4.classList.contains('active')) {
                flower4.classList.add('active');
            }
        }
        if(window.scrollY > flower5Top * 1.2) {
            if(!loadFlower5) {
                loadFlower5 = true;
            }
            if(!flower5.classList.contains('active')) {
                flower5.classList.add('active');
            }
        }
    })
    simplyCountdown('.simply-countdown', {year: 2024, // required
            month: 1, // required
            day: 20, // required
            hours: 8, // Default is 0 [0-23] integer
            minutes: 0, // Default is 0 [0-59] integer
            seconds: 0, // Default is 0 [0-59] integer
            words: { //words displayed into the countdown
                days: { singular: 'hari', plural: 'hari' },
                hours: { singular: 'jam', plural: 'jam' },
                minutes: { singular: 'menit', plural: 'menit' },
                seconds: { singular: 'deit', plural: 'detik' }
            },
    })
    function isMobile() {
        const regex = /Mobi|Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i;
        return regex.test(navigator.userAgent);
    }

</script>
@endsection
