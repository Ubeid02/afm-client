@extends('layouts/main')

@section('content')

@include('partials.hero')

<div id="beranda" class="container box-border mx-auto lg:my-12 lg:mx-12 lg:w-11/12 z-20 max-lg:text-center max-lg:mb-28">
    <section class="about min-h-[80vh] opacity-0 transform -translate-y-full transition-all duration-1000 ease-out">
        <div class="title mb-2">
            <h2 class="text-white font-normal text-lg bg-yellow-500 tracking-[7px] uppercase w-fit py-1 pl-4 pr-1 mb-1 max-lg:mx-auto">info perusahaan</h2>
            <h3 class="text-blue-950 uppercase font-bold text-3xl mt-20">tentang kami</h3>
        </div>
        <div class="text-img lg:flex lg:justify-around gap-12 box-border sm:block min-[1440px]:w-11/12">
            <div class="image-tools w-1/2 order-2 max-lg:mx-auto max-sm:mb-3 max-lg:mb-2">
                <img src="img/hero1.jpg" alt="afm" class="w-11/12 h-auto mr-12 sm:mr-0 sm:ml-4">
            </div>
            <div class="abouttext w-1/2 max-lg:w-11/12 order-1 max-lg:mx-auto">
                <p class="text-justify max-sm:text-center text-base text-gray-600 mb-5">
                    Anugerah Forklift Megantara adalah perusahaan yang bergerak di bidang penyewaan alat berat yang telah beroperasi sejak 2003 di bagian bidang jasa dan penyewaan. 
                    Dengan komitmen untuk memberikan solusi terbaik bagi kebutuhan konstruksi, pertambangan, dan berbagai proyek infrastruktur, 
                    PT. Mandiri Utama menawarkan berbagai macam alat berat berkualitas tinggi yang meliputi crane, forklift, dan fuso.
                </p>
                <a href="" class="border border-gray-600 rounded-md text-gray-600 text-base px-3 py-1.5 uppercase hover:bg-gray-600 hover:text-white">lihat selengkapnya</a>
            </div>
        </div>
    </section>
</div>

<div class="information-rental lg:mb-36 max-lg:mb-28">
    <section id="rentalCard" class="rental min-h-[80vh] opacity-0 transform -translate-y-full transition-all duration-1000 ease-out">
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
                                <span class="text-white font-bold text-2xl uppercase">forklift 3 Ton</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/forklift-doosan-50-1.png" alt="forklift-doosan-50" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 815-1512-4120&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%203%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">forklift 5 Ton</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/forklift-doosan-70-1.png" alt="forklift-doosan-70" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 815-1512-4120&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%205%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">forklift 7 Ton</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/forklift-HELI-30-1.png" alt="forklift-heli-30" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 815-1512-4120&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%207%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">forklift 10 Ton</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/forklift-lonking-30.png" alt="forklift-lonking-30" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 815-1512-4120&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%2010%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path fill="white" d="M230.17 13.71a12 12 0 0 0-11.82-.3L101 76H32a20 20 0 0 0-20 20v104a20 20 0 0 0 20 20h88a20 20 0 0 0 20-20v-32a11.9 11.9 0 0 0-.51-3.45L118.32 94L212 44v112h-12v-4a12 12 0 0 0-24 0v8a20 20 0 0 0 20 20h20a20 20 0 0 0 20-20V24a12 12 0 0 0-5.83-10.29M95.07 100l16.8 56H76v-56ZM52 100v56H36v-56Zm-16 96v-16h80v16Z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">Crane 25 Ton</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/crane-nissan-kato.png" alt="crane-nissan" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 815-1512-4120&text=Permisi%20%22apakah%20stock%20untuk%20Crane%20yang%20ukuran%2025%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path fill="white" d="M230.17 13.71a12 12 0 0 0-11.82-.3L101 76H32a20 20 0 0 0-20 20v104a20 20 0 0 0 20 20h88a20 20 0 0 0 20-20v-32a11.9 11.9 0 0 0-.51-3.45L118.32 94L212 44v112h-12v-4a12 12 0 0 0-24 0v8a20 20 0 0 0 20 20h20a20 20 0 0 0 20-20V24a12 12 0 0 0-5.83-10.29M95.07 100l16.8 56H76v-56ZM52 100v56H36v-56Zm-16 96v-16h80v16Z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">Crane 50 Ton</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/crane-xcmg.png" alt="crane-xcmg" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 815-1512-4120&text=Permisi%20%22apakah%20stock%20untuk%20Crane%20yang%20ukuran%2050%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path fill="white" d="M230.17 13.71a12 12 0 0 0-11.82-.3L101 76H32a20 20 0 0 0-20 20v104a20 20 0 0 0 20 20h88a20 20 0 0 0 20-20v-32a11.9 11.9 0 0 0-.51-3.45L118.32 94L212 44v112h-12v-4a12 12 0 0 0-24 0v8a20 20 0 0 0 20 20h20a20 20 0 0 0 20-20V24a12 12 0 0 0-5.83-10.29M95.07 100l16.8 56H76v-56ZM52 100v56H36v-56Zm-16 96v-16h80v16Z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">Crane 7 Ton</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/crane-xcmg.png" alt="crane-xcmg" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 815-1512-4120&text=Permisi%20%22apakah%20stock%20untuk%20Crane%20yang%20ukuran%2070%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path fill="white" d="M230.17 13.71a12 12 0 0 0-11.82-.3L101 76H32a20 20 0 0 0-20 20v104a20 20 0 0 0 20 20h88a20 20 0 0 0 20-20v-32a11.9 11.9 0 0 0-.51-3.45L118.32 94L212 44v112h-12v-4a12 12 0 0 0-24 0v8a20 20 0 0 0 20 20h20a20 20 0 0 0 20-20V24a12 12 0 0 0-5.83-10.29M95.07 100l16.8 56H76v-56ZM52 100v56H36v-56Zm-16 96v-16h80v16Z"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">Crane 120 Ton</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/crane-xcmg.png" alt="crane-xcmg" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 815-1512-4120&text=Permisi%20%22apakah%20stock%20untuk%20Crane%20yang%20ukuran%20120%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-list-rental relative w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                            <div class="tools-name flex items-center">
                                <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[1440px]:m-4 min-[1024px]:m-3">
                                    <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill="white" d="M6 3h10v7H6zm9 11a2 2 0 1 1-3.999.001A2 2 0 0 1 15 14m-2-3c1.3 0 2.4.8 2.8 2h.2v-2z"/><path fill="white" d="M5 5H1L0 9v4h1.2c.4-1.2 1.5-2 2.8-2s2.4.8 2.8 2h3.4c.4-1.2 1.5-2 2.8-2H5zM4 9H1l.8-3H4z"/><path fill="white" d="M6 14a2 2 0 1 1-3.999.001A2 2 0 0 1 6 14"/></svg>
                                </div>
                                <span class="text-white font-bold text-2xl uppercase">Fuso</span>
                            </div>
                            <div class="tools-img h-auto w-10/12 mx-auto -mt-5 max-[760px]:-mt-12">
                                <img src="img/truck.png" alt="truck" class="h-full w-full">
                            </div>
                            <div class="btn text-center absolute bottom-7 right-0 left-0">
                                <a href="https://api.whatsapp.com/send?phone=+62 815-1512-4120&text=Permisi%20%22apakah%20stock%20untuk%20Fuso%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
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

<div class="galery-company lg:mb-36 max-lg:mb-28">
    <section class="galery min-h-[80vh]">
        <div class="title mb-5 text-center">
            <h2 class="text-white font-normal text-lg bg-yellow-500 tracking-[7px] uppercase w-fit py-1 pl-4 pr-1 mb-1 mx-auto">Kegiatan afm</h2>
            <h3 class="text-blue-950 uppercase font-bold text-3xl">galeri perusahaan</h3>
        </div>

        <div class="container mx-auto p-9 border border-gray-300">
            <div class="galerys grid grid-cols-3 gap-5">
                <div class="gallery-item pict cursor-pointer relative w-full pb-[100%]">
                    <img src="img/galery/satu.jpg" alt="Gambar 1" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="gallery-item pict cursor-pointer relative w-full pb-[100%]">
                    <img src="img/galery/Crane.webp" alt="Gambar 2" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="gallery-item pict cursor-pointer relative w-full pb-[100%]">
                    <img src="img/galery/Forklift2.webp" alt="Gambar 3" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="gallery-item pict cursor-pointer relative w-full pb-[100%]">
                    <img src="img/galery/Forklift3.webp" alt="Gambar 4" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="gallery-item pict cursor-pointer relative w-full pb-[100%]">
                    <img src="img/galery/Forklift4.webp" alt="Gambar 5" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="gallery-item pict cursor-pointer relative w-full pb-[100%]">
                    <img src="img/galery/Crane2.webp" alt="Gambar 6" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="gallery-item vid cursor-pointer relative w-full pb-[100%]">
                    <iframe width="468" height="315" src="https://www.youtube.com/embed/CSVXV_ggmZg?si=3vuuGb6mQcsUosR4" class="absolute inset-0 w-full h-full object-cover" data-video-id="CSVXV_ggmZg"></iframe>
                </div>
                <div class="gallery-item vid cursor-pointer relative w-full pb-[100%]">
                    <iframe width="468" height="315" src="https://youtube.com/embed/ahTEdVGRHvA?si=h21TbDfBPH5S5HH8" class="absolute inset-0 w-full h-full object-cover" data-video-id="ahTEdVGRHvA"></iframe>
                </div>
                <div class="gallery-item vid cursor-pointer relative w-full pb-[100%]">
                    <iframe width="468" height="315" src="https://youtube.com/embed/nCg-fP6i8e0" class="absolute inset-0 w-full h-full object-cover" data-video-id="nCg-fP6i8e0"></iframe>
                </div>
            </div>
        </div>
        
        <!-- Modal untuk tampilan galeri penuh -->
        <div id="galleryModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
            <button id="prevButton" class="absolute left-4 text-white text-4xl">&lt;</button>
            <button id="nextButton" class="absolute right-4 text-white text-4xl">&gt;</button>
            <div class="max-w-4xl max-h-full relative">
                <img id="modalImage" src="" alt="" class="max-w-full max-h-[80vh] object-contain">
                <div id="videoContainer" class="hidden">
                    <video id="modalVideo" src="" class="max-w-full max-h-[80vh] object-contain" controls></video>
                </div>
                <div id="modalCaption" class="text-white text-center mt-4"></div>
            </div>
            <button id="closeModal" class="absolute top-4 right-4 text-white text-4xl">&times;</button>
        </div>
    </section>
</div>

@endsection

