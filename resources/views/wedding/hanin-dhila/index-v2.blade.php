@extends('wedding._layout.main')
@section('wedding-title', 'Hanin - Dhila')
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
        </div> --}}
        <div class="fullpage image-cover justify-content-center text-center pt-5" style="background-color:aqua;">
            <div class="container">
                <div class="header">
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-10">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 style="font-weight:bold;">Aulia</h2>
                                        </div>
                                        <div class="col-12">
                                            <h2 style="font-weight:bold;"> Hanin</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 align-items-center">
                                    <h4 style="font-weight:bold">&</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">

                        </div>
                    </div>
                </div>
                <div class="date">
                    {{-- <img src="{{asset('assets/image/wedding/flower_draw/fl_2.png')}}" class="image-ornament-left" alt="" width="200"> --}}

                    <hr>
                    <span>20 | 01 | 2024</span>
                    <hr>
                </div>
                <img src="{{asset('assets/image/wedding/flower_draw/fl_2_reverse.png')}}" class="image-ornament" alt="" width="200" style="right:0;">
                <div class="receiver">
                    <p class="mb-0">Kepada:</p>
                    <p style="font-size: 1.2em; font-weight:bold">{{ strlen(app('request')->input('to')) > 0 ?
                        app('request')->input('to') :
                        'Lorem Ipsum'  }}
                    </p>
                    <button class="btn btn-secondary" id="open-invitation">
                        Open Invitation
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="invitation-info" class="d-none">
        <audio src="{{asset('assets/music/always-with-me.mp3')}}" id="audio" loop></audio>
        {{-- Page 1: Kata Pengantar (Surat Ar-Rum : 21) --}}
        <div id="welcome" class="fullpage d-flex align-items-center bg-flower">
            <div class="container">
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
                <img src="" alt="">
            </div>
        </div>
        <div id="home" class="fullpage justify-content-center text-center py-5 bg-flower">
            <div class="container" id="salam">
                <div class="mx-3">
                    <h3>
                        Assalamualaikum Wr. Wb
                    </h3>
                    <p >
                        Dengan memohon Rahmat Allah Subhanahu wa Ta'ala Insya Allah kami akan menyelenggarakan acara pernikahan:
                    </p>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-5 col-12" id="bride">
                        <div class="card" style="border-radius:10px">
                            <div class="card-body">
                                <img src="{{asset('assets/image/wedding/dhila_closeup_square.jpg')}}" class="rounded-circle" style="position:relative;width:10em;height:autoz-index:100" alt="">
                                <img src="{{asset('assets/image/wedding/flower_blue/flower_color_3.png')}}" alt="" width="150" style="position:absolute;right:20px;top:100px">
                                <h3>Dhila</h3>
                                <h5>Aulia Fadhilah Zahro</h5>
                                <p class="mb-0">Putri dari:</p>
                                <p class="mb-0">Bapak Dartam</p>
                                <p class="mb-0">&</p>
                                <p class="mb-0">Ibu Muliana Prapmawati</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-12 text-center">
                        <h1 id="and">&</h1>
                    </div>
                    <div class="col-md-5 col-12" id="groom">
                        <div class="card" style="border-radius:10px">
                            <div class="card-body">
                                <img src="{{asset('assets/image/wedding/hanin_closeup_square.jpg')}}" class="rounded-circle" style="width:10em;height:auto" alt="">
                                <h3>Hanin</h3>
                                <h5>Faishal Hanin</h5>
                                <p class="mb-0">Putra dari:</p>
                                <p class="mb-0">Bapak Eko Suparyono</p>
                                <p class="mb-0">&</p>
                                <p class="mb-0">Ibu Susilawati</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Page 3: Tanggal & Lokasi --}}
        <div id="date-location" class="fullpage justify-content-center text-center pt-5 bg-flower">
            <div class="container">
                <h3 class="mb-5" id="save-date" style="font-weight: bolder">Save The Date</h3>
                <div class="row mt-5">
                    <div class="col-md-6 col-12 text center mb-3" id="akad">
                        <div class="card" style="border-radius:10px;">
                            <div class="card-body">
                                <h3>Akad Nikah</h3>
                                <h5 class="fw-bold">Sabtu, 20 Januari 2023</h5>
                                <p>08.00 WIB</p>
                                <a class="btn btn-secondary btn-sm" href="https://www.google.com/maps/dir//J64W%2B4RV+Masjid+Darussallam,+Jl.+Gn.+Jayawijaya,+Pabuwaran,+Pabuaran,+Kec.+Purwokerto+Utara,+Kabupaten+Banyumas,+Jawa+Tengah+53124/@-7.3946261,109.2464137,19z/data=!4m17!1m7!3m6!1s0x2e655f053bf1510f:0xd9f423e4546ac21d!2sMasjid+Darussallam!8m2!3d-7.3946274!4d109.2470574!16s%2Fg%2F11h1yvvxvy!4m8!1m0!1m5!1m1!1s0x2e655f053bf1510f:0xd9f423e4546ac21d!2m2!1d109.2470665!2d-7.3946271!3e2?entry=ttu" target="_blank">
                                    Menuju Lokasi
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 text-center mb-3" id="resepsi">
                        <div class="card">
                            <div class="card-body">
                                <h3>Resepsi</h3>
                                <h5 class="fw-bold">Sabtu, 20 Januari 2023</h5>
                                <p>11.00 WIB</p>
                                <a class="btn btn-secondary btn-sm" href="https://www.google.com/maps/dir//J64W%2B4RV+Masjid+Darussallam,+Jl.+Gn.+Jayawijaya,+Pabuwaran,+Pabuaran,+Kec.+Purwokerto+Utara,+Kabupaten+Banyumas,+Jawa+Tengah+53124/@-7.3946261,109.2464137,19z/data=!4m17!1m7!3m6!1s0x2e655f053bf1510f:0xd9f423e4546ac21d!2sMasjid+Darussallam!8m2!3d-7.3946274!4d109.2470574!16s%2Fg%2F11h1yvvxvy!4m8!1m0!1m5!1m1!1s0x2e655f053bf1510f:0xd9f423e4546ac21d!2m2!1d109.2470665!2d-7.3946271!3e2?entry=ttu" target="_blank">
                                    Menuju Lokasi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-5">Countdown Menuju Acara</h3>
                <div class="simply-countdown"></div>
            </div>
        </div>
        {{-- Page 4: Countdown & Harapan --}}
        <div id="closing" class="fullpage justify-content-center text-center bg-flower">

        </div>
        {{-- Page 5: Galeri --}}
        <span class="btn-music rounded-circle" id="music" data="pause">
            <i class="fas fa-play" id="icon-music"></i>
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

    let loadSalam = false;
    let loadSaveDate = false;
    let loadBride = false;
    let loadAnd = false;
    let loadGroom = false;
    let loadAkad = false;
    let loadResepsi = false
    document.getElementById('open-invitation').addEventListener('click', () => {
        // const audio = document.getElementById('audio');
        document.getElementById('cover').classList.add('invitation-open');
        document.getElementById('invitation-info').classList.remove('d-none');

        console.log(`
            home: ${document.getElementById('home').offsetTop},
            bride: ${document.getElementById('bride').offsetTop},
            groom: ${document.getElementById('groom').offsetTop},
            date location: ${document.getElementById('date-location').offsetTop},
            akad: ${document.getElementById('akad').offsetTop},
            resepsi: ${document.getElementById('resepsi').offsetTop},
        `)

        salamTop = document.getElementById('salam').offsetTop;
        groomTop = document.getElementById('groom').offsetTop;
        andTop = document.getElementById('and').offsetTop;
        brideTop = document.getElementById('bride').offsetTop;
        saveDateTop = document.getElementById('save-date').offsetTop;
        akadTop = document.getElementById('akad').offsetTop;
        resepsiTop = document.getElementById('resepsi').offsetTop;

        document.getElementById('salam').classList.add('reveal');
        document.getElementById('groom').classList.add('reveal');
        document.getElementById('and').classList.add('reveal');
        document.getElementById('bride').classList.add('reveal');
        document.getElementById('save-date').classList.add('reveal');
        document.getElementById('akad').classList.add('reveal');
        document.getElementById('resepsi').classList.add('reveal');
        // audio.play();
        // setTimeout(() => {
        //     document.getElementById('cover').classList.add('d-none');
        // }, 1000);
    })
    document.getElementById('music').addEventListener('click', () => {
        const musicDo = document.getElementById('music').getAttribute('data');
        // const audio = document.getElementById('audio');
        if(musicDo == "pause") {
            // audio.pause();
            document.getElementById('icon-music').classList.remove('fa-play');
            document.getElementById('icon-music').classList.add('fa-pause');
            document.getElementById('music').setAttribute('data','play');
        } else {
            // audio.play();
            document.getElementById('icon-music').classList.remove('fa-pause');
            document.getElementById('icon-music').classList.add('fa-play');
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
        if(checkIsMobile ? (window.scrollY >= salamTop / 2) : (window.scrollY >= salamTop / 3)) {
            if(!loadSalam) {
                loadSalam = true;
                console.log("load home", window.scrollY);
            }
            if(!salamDiv.classList.contains('active')) {
                salamDiv.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY >= saveDateTop / 1.5) : (window.scrollY >= saveDateTop / 3)) {
            if(!loadSaveDate) {
                loadSaveDate = true;
                console.log("load date location", window.scrollY);
            }
            if(!saveDateDiv.classList.contains('active')) {
                saveDateDiv.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY >= brideTop / 2) : (window.scrollY >= brideTop / 3)) {
            if(!loadBride) {
                loadBride = true;
                console.log("load bride", window.scrollY);
            }
            if(!brideDiv.classList.contains('active')) {
                brideDiv.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY >= andTop / 2) : (window.scrollY >= andTop / 3)) {
            if(!loadAnd) {
                loadAnd = true;
                console.log("load and", window.scrollY);
            }
            if(!andDiv.classList.contains('active')) {
                andDiv.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY > groomTop / 2) : (window.scrollY > groomTop / 3)) {
            if(!loadGroom) {
                loadGroom = true;
                console.log("load groom", window.scrollY);
            }
            if(!groomDiv.classList.contains('active')) {
                groomDiv.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY > akadTop / 1.5) : (window.scrollY > akadTop / 3)) {
            if(!loadAkad) {
                loadAkad = true;
                console.log("load akad", window.scrollY);
            }
            if(!akadDiv.classList.contains('active')) {
                akadDiv.classList.add('active');
            }
        }
        if(checkIsMobile ? (window.scrollY > resepsiTop / 1.5) : (window.scrollY > resepsiTop / 3)) {
            if(!loadResepsi) {
                loadResepsi = true;
                console.log("load resepsi", window.scrollY)
            }
            if(!resepsiDiv.classList.contains('active')) {
                resepsiDiv.classList.add('active');
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
                days: { singular: 'day', plural: 'days' },
                hours: { singular: 'hour', plural: 'hours' },
                minutes: { singular: 'minute', plural: 'minutes' },
                seconds: { singular: 'second', plural: 'seconds' }
            },
    })
    function isMobile() {
        const regex = /Mobi|Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i;
        return regex.test(navigator.userAgent);
    }

</script>
@endsection
