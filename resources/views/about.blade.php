@extends('layouts/main')

@section('content')

<div class="container-about w-full">
    <section class="hero-title relative mx-auto">
        <div class="image">
            <img src="img/hero1.jpg" alt="" class="w-full h-96 bg-repeat-x object-cover brightness-50">
        </div>
        <div class="text-about text-center relative -mt-32">
            <h1 class="text-white font-extrabold text-3xl max-lg:text-3xl uppercase">tentang kami</h1>
        </div>
    </section>

    <section class="about-company mt-48">
        <div class="image-logo bg-gray-500 w-fit h-96 rounded-b-2xl mx-auto mt-24 mb-16 drop-shadow-2xl max-md:rounded-none opacity-0 transform -translate-y-full transition-all duration-1000 ease-out">
            <img src="img/logo-afm.png" alt="" class="mx-auto">
        </div>
        <div class="container about-description text-center mx-auto opacity-0 transform -translate-y-full transition-all duration-1000 ease-out">
            <h2 class="text-blue-950 font-extrabold text-3xl underline underline-offset-4 uppercase">anugerah forklift megantara (afm)</h2>
            <div class="desc-text text-gray-700 text-justify text-base mx-32 my-9 max-md:mx-auto max-md:w-3/4 box-border">
                <p class="my-2">Anugerah Forklift Megantara (AFM) adalah perusahaan yang bergerak di bidang penyewaan alat berat yang telah beroperasi sejak 2003 di bidang jasa dan penyewaan. Dengan komitmen untuk memberikan solusi terbaik bagi kebutuhan konstruksi, pertambangan, dan berbagai proyek infrastruktur, AFM menawarkan berbagai macam alat berat berkualitas tinggi yang meliputi forklift, crane, dan fuso.</p>
                <p class="my-2">Visi kami adalah  Menjadi perusahaan penyewaan alat berat terkemuka di Indonesia. Kami memahami bahwa setiap proyek memiliki kebutuhan yang unik, oleh karena itu kami selalu berusaha menyediakan alat berat yang tepat, dalam kondisi prima, dan sesuai dengan kebutuhan pelanggan. Tim teknisi kami yang berpengalaman selalu siap untuk memastikan setiap alat berat yang disewakan berada dalam kondisi optimal dan siap pakai.</p>
                <p class="my-2">Selain itu, AFM juga memberikan layanan purna jual yang meliputi perawatan dan perbaikan alat berat untuk memastikan kelancaran operasional di lapangan. Kami juga menawarkan program pelatihan bagi operator alat berat untuk meningkatkan keterampilan dan keselamatan kerja.</p>
                <p class="my-2">Kami bangga telah menjadi bagian dari berbagai proyek besar di seluruh Indonesia, dari pembangunan jalan tol hingga pengembangan tambang. Kepercayaan pelanggan adalah prioritas utama kami, dan kami terus berinovasi untuk meningkatkan layanan serta memperluas jangkauan produk kami.</p>
                <p class="my-2">Dengan dukungan tim profesional dan dedikasi terhadap kualitas layanan, AFM siap menjadi solusi terpercaya dalam penyewaan alat berat untuk mendukung kesuksesan proyek Anda.</p>
            </div>
        </div>
        <div class="visi-misi mx-40 my-24 max-md:mx-auto opacity-0 transform -translate-y-full transition-all duration-1000 ease-out">
            <div class="container mx-auto grid grid-cols-2 grid-rows-2 gap-7 max-lg:block">
                <div class="sub1 row-start-1 content-center text-center">
                    <h2 class="text-blue-950 font-extrabold text-3xl underline underline-offset-4 uppercase">visi & misi</h2>
                </div>
                <div class="sub2 row-start-2">
                    <div class="visi text-gray-700 text-justify text-base bg-gray-300 p-5 rounded-tl-3xl rounded-br-3xl max-lg:rounded-none mt-9 max-xl:mt-28 max-2xl:mt-9 max-lg:mt-5">
                        <p> Menjadi perusahaan penyewaan alat berat terkemuka di Indonesia, yang senantiasa memberikan solusi terbaik dan inovatif untuk memenuhi kebutuhan pelanggan.</p>
                    </div>
                </div>
                <div class="sub3 row-span-2 mt-40">
                    <div class="misi text-gray-700 text-justify text-base bg-gray-300 py-5 px-9 rounded-tr-3xl rounded-bl-3xl max-lg:rounded-none max-lg:mt-3">
                        <ul class="list-disc">
                            <li>
                                Menyediakan alat-alat konstruksi berkualitas tinggi dengan kondisi prima.
                            </li>
                            <li>
                                Memberikan layanan sewa yang cepat, efisien, dan mudah.
                            </li>
                            <li>
                                Membangun kemitraan jangka panjang dengan pelanggan melalui kepuasan yang terukur.
                            </li>
                            <li>
                                Meningkatkan kompetensi karyawan dalam memberikan pelayanan baik.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mutu-strategi relative mb-24">
            <img src="img/hero1.jpg" alt="" class="w-full h-72 bg-repeat-x object-cover brightness-50">
            <div class="text-about absolute top-16 inset-x-[540px]">
                <h1 class="text-white font-extrabold text-3xl underline underline-offset-4 uppercase">tentang kami</h1>
            </div>
            <div class="desc-mutu-strategi absolute top-36 inset-x-40">
                <p class="text-white text-center text-base">Anugerah Forklift Megantara (AFM) adalah perusahaan yang bergerak di bidang penyewaan alat berat yang telah beroperasi sejak tahun 2003.</p>
            </div>
        </div>
        <div class="location mb-24 text-center">
            <h2 class="text-blue-950 font-extrabold text-3xl underline underline-offset-4 uppercase">lokasi</h2>
            <div class="loc my-7">
                <iframe class="w-full h-96" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.8210961857735!2d112.01836087455267!3d-7.702339276286545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784f3099cc0c4d%3A0x3522b666544c21b5!2sJl.%20Warujayeng%20-%20Kediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1721104804978!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</div>

@endsection