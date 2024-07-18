@extends('layouts/main')

@section('content')

@include('partials.hero')

<div class="container box-border mx-auto lg:my-9 lg:mx-12 lg:w-11/12 z-20 relative min-[1440px]:mt-80 min-[1440px]:mx-28 sm:my-5 max-lg:text-center">
    <section class="about min-h-[80vh]">
        <div class="title mb-2">
            <h2 class="text-white font-normal text-lg bg-yellow-500 tracking-[7px] uppercase w-fit py-1 pl-4 pr-1 mb-1 max-lg:mx-auto">info perusahaan</h2>
            <h3 class="text-blue-950 uppercase font-bold text-3xl">tentang kami</h3>
        </div>
        <div class="text-img lg:flex lg:justify-around gap-12 box-border sm:block min-[1440px]:w-11/12">
            <div class="image-tools w-1/2 order-2 max-lg:mx-auto max-sm:mb-3">
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

<div class="information-rental -mt-14 min-[1440px]:-mt-36 max-lg:mt-14 mb-12">
    <section class="rental">
        <div class="title mb-5 text-center">
            <h2 class="text-white font-normal text-lg bg-yellow-500 tracking-[7px] uppercase w-fit py-1 pl-4 pr-1 mb-1 mx-auto">alat berat afm</h2>
            <h3 class="text-blue-950 uppercase font-bold text-3xl">jenis alat</h3>
        </div>

        <div class="rental-container overflow-hidden">
            <div id="cardContainer" class="card flex transition-all duration-300 ease-in-out ml-[430px] sm:ml-32 max-[760px]:ml-1 min-[760px]:ml-[525px]">
                <div class="card-list-rental w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                    <div class="tools-name flex items-center">
                        <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[760px]:m-1.5">
                            <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                        </div>
                        <span class="text-white font-bold text-2xl uppercase">forklift doosan 5t</span>
                    </div>
                    <div class="tools-img h-auto w-96 mx-auto -mt-5 max-[760px]:-mt-12">
                        <img src="img/forklift.png" alt="forklift-5-ton" class="h-full w-full">
                    </div>
                    <div class="btn text-center">
                        <a href="https://api.whatsapp.com/send?phone=+62 812-3525-3171&text=Permisi%20%22apakah%20stock%20untuk%20forklift%20yang%20ukuran%205%20TON%20masih%20ada%22%20%F0%9F%91%8B" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                    </div>
                </div>
                <div class="card-list-rental w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                    <div class="tools-name flex items-center">
                        <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[760px]:m-1.5">
                            <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                        </div>
                        <span class="text-white font-bold text-2xl uppercase">forklift doosan 5t</span>
                    </div>
                    <div class="tools-img h-auto w-96 mx-auto -mt-5 max-[760px]:-mt-12">
                        <img src="img/forklift.png" alt="forklift-5-ton" class="h-full w-full">
                    </div>
                    <div class="btn text-center">
                        <a href="" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                    </div>
                </div>

                <div class="card-list-rental w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                    <div class="tools-name flex items-center">
                        <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[760px]:m-1.5">
                            <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                        </div>
                        <span class="text-white font-bold text-2xl uppercase">forklift doosan 5t</span>
                    </div>
                    <div class="tools-img h-auto w-96 mx-auto -mt-5 max-[760px]:-mt-12">
                        <img src="img/forklift.png" alt="forklift-5-ton" class="h-full w-full">
                    </div>
                    <div class="btn text-center">
                        <a href="" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                    </div>
                </div>

                <div class="card-list-rental w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                    <div class="tools-name flex items-center">
                        <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[760px]:m-1.5">
                            <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                        </div>
                        <span class="text-white font-bold text-2xl uppercase">forklift doosan 5t</span>
                    </div>
                    <div class="tools-img h-auto w-96 mx-auto -mt-5 max-[760px]:-mt-12">
                        <img src="img/forklift.png" alt="forklift-5-ton" class="h-full w-full">
                    </div>
                    <div class="btn text-center">
                        <a href="" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
                    </div>
                </div>

                <div class="card-list-rental w-[458px] h-[361px] bg-[#494949] rounded-xl shadow-[0_0_10px_5px_rgba(0,0,0,0.3)] mr-12">
                    <div class="tools-name flex items-center">
                        <div class="icon-card bg-yellow-500 rounded-full w-fit max-lg:m-3 max-[760px]:m-7 min-[760px]:m-1.5">
                            <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M4 21q-1.25 0-2.125-.875T1 18q0-.65.25-1.237T2 15.75V11h2V5h8l4.7 11.075q.15.35.225.7T17 17.5q0 1.45-1.025 2.475T13.5 21q-1.025 0-1.888-.537T10.326 19h-3.5q-.325.9-1.1 1.45T4 21m14-1V4h2v14h3v2zM4 19q.425 0 .713-.288T5 18t-.288-.712T4 17t-.712.288T3 18t.288.713T4 19m9.5 0q.625 0 1.063-.437T15 17.5t-.437-1.062T13.5 16t-1.062.438T12 17.5t.438 1.063T13.5 19m-4.575-5h4.725l-2.975-7H6v4z"/></svg>
                        </div>
                        <span class="text-white font-bold text-2xl uppercase">forklift doosan 5t</span>
                    </div>
                    <div class="tools-img h-auto w-96 mx-auto -mt-5 max-[760px]:-mt-12">
                        <img src="img/forklift.png" alt="forklift-5-ton" class="h-full w-full">
                    </div>
                    <div class="btn text-center">
                        <a href="" class="text-white text-base font-bold bg-yellow-500 p-3 rounded-lg uppercase hover:bg-yellow-600">pesan</a>
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

