@extends('wedding._layout.main')
@section('wedding-title', 'Hanin - Dhila')
@section('wedding-content')
    {{-- Front Page --}}
    <div id="cover" class="cover-page">
        {{-- <div class="fullpage image-cover d-flex align-items-center">
            asdf
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-10 col-md-8">
                        <div class="card">
                            <div class="card-body justify-content-center text-center">
                                <h5>The Wedding Of:</h5>
                                <h2>Dhila & Hanin</h2>
                                <span>Sabtu, 20 Januari 2023</span>
                                <hr class="mx-5">
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
        </div> --}}
        <div class="fullpage image-cover justify-content-center text-center pt-5">
            <div class="container">
                <div class="header">
                    <h5>The Wedding Of:</h5>
                    <h2 style="font-weight:bold;">Dhila & Hanin</h2>
                    <span>Sabtu, 20 Januari 2023</span>
                </div>
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
    <div id="invitation-info" class="d-none">
        <audio src="{{asset('assets/music/always-with-me.mp3')}}" id="audio" loop></audio>
        {{-- Page 1: Kata Pengantar (Surat Ar-Rum : 21) --}}
        <div id="home" class="fullpage d-flex align-items-center bg-milkwhite">
            <div class="container">
                <div class="row d-flex justify-content-center text-center mx-3">
                    <div class="col-md-6 col-12">
                        <div class="card px-3" style="border-radius:100px">
                            <div class="card-body">
                                <img src="{{asset('assets/image/wedding/hanin_dhila_nobg.png')}}" alt="" style="width:10em;height:auto;">
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
        {{-- Page 2: Mempelai Wanita & Mempelai Pria --}}
        {{-- <div id="salam" class="justify-content-center text-center py-5 bg-darkblue mx-3">

        </div> --}}
        <div class="container">
            <hr>
        </div>
        <div id="home" class="fullpage justify-content-center text-center py-5">
            <div class="container">
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
                    <div class="col-md-5 col-12">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{asset('assets/image/wedding/dhila_closeup_square.jpg')}}" class="rounded-circle" style="width:10em;height:auto" alt="">
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
                        <h1>&</h1>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="card">
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
        <div id="home" class="fullpage justify-content-center text-center bg-darkblue pt-5">
            <div class="container">
                <h1 class="mb-5">Save The Date</h1>
                <div class="row mt-5">
                    <div class="col-md-6 col-12 text center mb-3">
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
                    <div class="col-md-6 col-12 text-center mb-3">
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
        <div id="countdown" class="fullpage justify-content-center text-center">

        </div>
        {{-- Page 5: Galeri --}}
        <span class="btn-music rounded-circle" id="music" data="pause">
            <i class="fas fa-play" id="icon-music"></i>
        </span>
    </div>
@endsection
@section('after-script')
<script>
    document.getElementById('open-invitation').addEventListener('click', () => {
        // const audio = document.getElementById('audio');
        document.getElementById('cover').classList.add('invitation-open');
        document.getElementById('invitation-info').classList.remove('d-none');
        // audio.play();
        setTimeout(() => {
            document.getElementById('cover').classList.add('d-none');
        }, 1000);
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

</script>
@endsection
