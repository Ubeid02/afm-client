@extends('layouts/main')

@section('content')

@include('partials.hero')

<div id="beranda" class="container box-border mx-auto lg:my-12 lg:mx-12 lg:w-11/12 z-20 max-lg:text-center max-lg:mb-28">
    <section class="about min-h-[80vh] opacity-0 transform -translate-y-full transition-all duration-1000 ease-out">
        <div class="title mb-2">
            <h2 class="text-white font-normal text-lg bg-yellow-500 tracking-[7px] uppercase w-fit py-1 pl-4 pr-1 mb-1 max-lg:mx-auto">info perusahaan</h2>
            <h3 class="text-blue-950 uppercase font-bold text-3xl">tentang kami</h3>
        </div>
        <div class="text-img lg:flex lg:justify-around gap-12 box-border sm:block min-[1440px]:w-11/12">
            <div class="image-tools w-1/2 order-2 max-lg:mx-auto max-sm:mb-3 max-lg:mb-2">
                <img src="img/hero1.jpg" alt="afm" class="w-11/12 h-auto mr-12 sm:mr-0 sm:ml-4">
            </div>
            <div class="abouttext w-1/2 max-lg:w-11/12 order-1 max-lg:mx-auto">
                <p class="text-justify max-sm:text-center text-base text-gray-600 mb-5">
                    Anugerah Forklift Megantara adalah perusahaan yang bergerak di bidang penyewaan alat berat yang telah beroperasi selama lebih dari dua dekade. Dengan komitmen untuk memberikan solusi terbaik bagi kebutuhan konstruksi, pertambangan, dan berbagai proyek infrastruktur, PT. Mandiri Utama menawarkan berbagai macam alat berat berkualitas tinggi yang meliputi excavator, bulldozer, crane, dan wheel loader.
                </p>
                <a href="" class="border border-gray-600 rounded-md text-gray-600 text-base px-3 py-1.5 uppercase hover:bg-gray-600 hover:text-white">lihat selengkapnya</a>
            </div>
        </div>
    </section>
</div>

<div class="information-rental mb-16">
    <section id="rentalCard" class="rental opacity-0 transform -translate-y-full transition-all duration-1000 ease-out">
        <div class="title mb-5 text-center">
            <h2 class="text-white font-normal text-lg bg-yellow-500 tracking-[7px] uppercase w-fit py-1 pl-4 pr-1 mb-1 mx-auto">alat berat afm</h2>
            <h3 class="text-blue-950 uppercase font-bold text-3xl">jenis alat</h3>
        </div>

        <div class="rental-container overflow-hidden">
            <div class="swiper-container">
                <div id="cardContainer" class="swiper-wrapper card flex transition-all duration-300 ease-in-out ml-[430px] sm:ml-32 max-[760px]:ml-0 min-[1440px]:ml-[500px] min-[1024px]:ml-72">
                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">forklift doosan 50</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/forklift-doosan-50-1.png" alt="forklift-doosan-50" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 812-3525-3171&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%205%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">forklift doosan 70</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/forklift-doosan-70-1.png" alt="forklift-doosan-70" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 812-3525-3171&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%205%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">forklift heli 30</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/forklift-HELI-30-1.png" alt="forklift-heli-30" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 812-3525-3171&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%205%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">forklift lonking 30</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/forklift-lonking-30.png" alt="forklift-lonking-30" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 812-3525-3171&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%205%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">forklift tcm 100</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/forklift-tcm-100-1.png" alt="forklift-tcm-100" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 812-3525-3171&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%205%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">forklift toyota 35</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/forklift-toyota-3.5-1.png" alt="forklift-toyota-3.5" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 812-3525-3171&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%205%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">forklift nissan 50</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/forklift-nissan-50-1.png" alt="forklift-nissan-50" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 812-3525-3171&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%205%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path fill="white" d="M230.17 13.71a12 12 0 0 0-11.82-.3L101 76H32a20 20 0 0 0-20 20v104a20 20 0 0 0 20 20h88a20 20 0 0 0 20-20v-32a11.9 11.9 0 0 0-.51-3.45L118.32 94L212 44v112h-12v-4a12 12 0 0 0-24 0v8a20 20 0 0 0 20 20h20a20 20 0 0 0 20-20V24a12 12 0 0 0-5.83-10.29M95.07 100l16.8 56H76v-56ZM52 100v56H36v-56Zm-16 96v-16h80v16Z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">crane nissan kato</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/crane-nissan-kato.png" alt="crane-nissan" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 812-3525-3171&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%205%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path fill="white" d="M230.17 13.71a12 12 0 0 0-11.82-.3L101 76H32a20 20 0 0 0-20 20v104a20 20 0 0 0 20 20h88a20 20 0 0 0 20-20v-32a11.9 11.9 0 0 0-.51-3.45L118.32 94L212 44v112h-12v-4a12 12 0 0 0-24 0v8a20 20 0 0 0 20 20h20a20 20 0 0 0 20-20V24a12 12 0 0 0-5.83-10.29M95.07 100l16.8 56H76v-56ZM52 100v56H36v-56Zm-16 96v-16h80v16Z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">crane xcmg</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/crane-xcmg.png" alt="crane-xcmg" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 812-3525-3171&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%205%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill="white" d="M6 3h10v7H6zm9 11a2 2 0 1 1-3.999.001A2 2 0 0 1 15 14m-2-3c1.3 0 2.4.8 2.8 2h.2v-2z"/><path fill="white" d="M5 5H1L0 9v4h1.2c.4-1.2 1.5-2 2.8-2s2.4.8 2.8 2h3.4c.4-1.2 1.5-2 2.8-2H5zM4 9H1l.8-3H4z"/><path fill="white" d="M6 14a2 2 0 1 1-3.999.001A2 2 0 0 1 6 14"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">truck</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/truck.png" alt="truck" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 812-3525-3171&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%205%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="white" d="m239.283 27.155l-29.615 59.229l-12.412-37.23L153 71.281v20.125l33.742-16.87l19.59 58.767l34.387-68.77l47.998 80l35.308-70.613L359 91.407V71.282l-43.025-21.511l-28.694 57.384zM89 70.845v46h46v-46zm288 0v46h46v-46zm-304 64v302h94v-112h178v112h94v-302h-79.973l-32 128H184.973l-32-128zm101.027 10l4.5 18h154.946l4.5-18zm8.5 34l4.5 18h137.946l4.5-18zm208.473 27c13.7 0 25 11.3 25 25s-11.3 25-25 25s-25-11.3-25-25s11.3-25 25-25m-336 .816l-30 20v146.184h30zm136.027 6.184l4.5 18h120.946l4.5-18zm199.973 57c13.7 0 25 11.3 25 25s-11.3 25-25 25s-25-11.3-25-25s11.3-25 25-25m66 57v46h30v-46zm-66 7c13.7 0 25 11.3 25 25s-11.3 25-25 25s-25-11.3-25-25s11.3-25 25-25m-206 9v46h17.438L224 345.72l34.467 68.931l9.804-9.806H327v-62zm39 43.127l-10.438 20.873H185v46h142v-30h-51.271l-22.194 22.193zm233 4.873v46h30v-46zm-390 64l-40 30h108v-30zm310 0v30h108l-40-30z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">generator power 50 kva</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/Silent-50kVA-Power-Soundproof-AC-Three-Phase-Diesel-Generators-1.png" alt="Silent-50kVA-Power-Soundproof-AC-Three-Phase-Diesel-Generators" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 812-3525-3171&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%205%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="next-prev flex justify-center gap-2 mt-8">
            <div class="previous">
                <button id="prevBtn" type="submit" class="font-bold text-lg text-[#323232] border border-gray-700 py-1 px-3 rounded-lg hover:text-white hover:bg-[#323232]"><<</button>
            </div>
            <div class="next">
                <button id="nextBtn" type="submit" class="font-bold text-lg text-[#323232] border border-gray-700 py-1 px-3 rounded-lg hover:text-white hover:bg-[#323232]">>></button>
            </div>
        </div>
    </section>
</div>

@endsection

