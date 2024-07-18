@extends('layouts/main')

@section('content')

<div class="container-about w-full">
    <section class="hero-title relative mx-auto">
        <img src="img/hero1.jpg" alt="" class="w-full h-96 bg-repeat-x object-cover brightness-50">
        <div class="text-about absolute top-44 inset-x-[540px] max-lg:inset-x-64">
            <h1 class="text-white font-extrabold text-3xl max-lg:text-3xl uppercase">tentang kami</h1>
        </div>
    </section>

    <section class="about-company">
        <div class="image-logo bg-gray-500 w-fit h-96 rounded-b-2xl mx-auto mt-24 mb-16 drop-shadow-2xl">
            <img src="img/logo-afm.png" alt="" class="mx-auto">
        </div>
        <div class="container about-description text-center mx-auto">
            <h2 class="text-blue-950 font-extrabold text-3xl underline underline-offset-4 uppercase">anugerah forklift megantara (afm)</h2>
            <div class="desc-text text-gray-700 text-justify text-base mx-32 my-9 box-border">
                <p class="my-2">Anugerah Forklift Megantara (AFM) adalah perusahaan yang bergerak di bidang penyewaan alat berat yang telah beroperasi selama lebih dari dua dekade. Dengan komitmen untuk memberikan solusi terbaik bagi kebutuhan konstruksi, pertambangan, dan berbagai proyek infrastruktur, AFM menawarkan berbagai macam alat berat berkualitas tinggi yang meliputi excavator, bulldozer, crane, dan wheel loader.</p>
                <p class="my-2">Visi kami adalah menjadi mitra terpercaya dalam penyewaan alat berat yang unggul di Indonesia. Kami memahami bahwa setiap proyek memiliki kebutuhan yang unik, oleh karena itu kami selalu berusaha menyediakan alat berat yang tepat, dalam kondisi prima, dan sesuai dengan kebutuhan pelanggan. Tim teknisi kami yang berpengalaman selalu siap untuk memastikan setiap alat berat yang disewakan berada dalam kondisi optimal dan siap pakai.</p>
                <p class="my-2">Selain itu, AFM juga memberikan layanan purna jual yang meliputi perawatan dan perbaikan alat berat untuk memastikan kelancaran operasional di lapangan. Kami juga menawarkan program pelatihan bagi operator alat berat untuk meningkatkan keterampilan dan keselamatan kerja.</p>
                <p class="my-2">Kami bangga telah menjadi bagian dari berbagai proyek besar di seluruh Indonesia, dari pembangunan jalan tol hingga pengembangan tambang. Kepercayaan pelanggan adalah prioritas utama kami, dan kami terus berinovasi untuk meningkatkan layanan serta memperluas jangkauan produk kami.</p>
                <p class="my-2">Dengan dukungan tim profesional dan dedikasi terhadap kualitas layanan, AFM siap menjadi solusi terpercaya dalam penyewaan alat berat untuk mendukung kesuksesan proyek Anda.</p>
            </div>
        </div>
        <div class="visi-misi mx-40 my-24">
            <div class="container mx-auto grid grid-cols-2 grid-rows-2 gap-7">
                <div class="sub1 row-start-1 content-center text-center">
                    <h2 class="text-blue-950 font-extrabold text-3xl underline underline-offset-4 uppercase">visi & misi</h2>
                </div>
                <div class="sub2 row-start-2">
                    <div class="visi text-gray-700 text-justify text-base bg-gray-300 p-5 rounded-tl-3xl rounded-br-3xl">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum, felis id faucibus facilisis, lectus justo dapibus turpis, quis fringilla purus nisl vel arcu.</p>
                    </div>
                </div>
                <div class="sub3 row-span-2">
                    <div class="misi text-gray-700 text-justify text-base bg-gray-300 py-5 px-9 rounded-tr-3xl rounded-bl-3xl">
                        <ul class="list-disc">
                            <li>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum, felis id faucibus facilisis, lectus justo dapibus turpis, quis fringilla purus nisl vel arcu.
                            </li>
                            <li>
                                Phasellus in tincidunt augue. Duis auctor urna nec urna varius, ut accumsan libero dictum.
                            </li>
                            <li>
                                Donec consequat ex ut lectus suscipit, vel luctus dolor ullamcorper. In sit amet eros et libero dictum aliquet.
                            </li>
                            <li>
                                Nam ac risus at lacus vulputate convallis. Integer condimentum nunc et nisl elementum, et varius mauris viverra.
                            </li>
                            <li>
                                Curabitur fringilla consequat augue, ac viverra dolor scelerisque et. Suspendisse ultrices purus sed quam lacinia, ut venenatis metus vehicula.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mutu-strategi relative mb-24">
            <div class="desc-mutu-strategi absolute top-36 inset-x-40">
                <p class="text-white text-center text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum, felis id faucibus facilisis, lectus justo dapibus turpis, quis fringilla purus nisl vel arcu.</p>
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