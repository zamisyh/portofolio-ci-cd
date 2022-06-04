<div>

    @section('js')
        <script src="{{ asset('library/particlejs/particles.min.js') }}"></script>
        <script>
            var config = "{{ asset('library/particlejs/particlesjs-config.json') }}";
            particlesJS.load('particles-js', config, function() {
                console.log('callback - particles.js config loaded');
            });
        </script>
        <script src="{{ asset('library/animation/anime.min.js') }}"></script>
        <script src="{{ asset('library/animation/app.js') }}"></script>

    @endsection
    <div>

        @livewire('clients.components.navbar')
        <div class="p-10 py-10 text-lg lg:mx-52">
            <div class="flex justify-center mt-5 mb-20 image animate-pulse">
                <div class="avatar">
                    <div class="w-48 h-48 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                      <img src="https://api.lorem.space/image/face?hash=3174" loading="lazy" />
                    </div>
                </div>
            </div>
            <div class="wrapper-about">
                <h1 class="mt-10 mb-5 text-4xl font-bold hover:underline">About Me</h1>
                <p>
                    Hello everyone. my name is Zamzam Saputra you can call me Zami or Zamzam
                </p>
                <p class="mt-5">
                    I am a Full-Stack Developer who specializes in Backend Developers, building complex applications using APIs with microservice concepts, I also like and am currently studying SysAdmin and DevOps for good application deployment management, besides that, I am also learning Front End Developers. I like exploring tech-related stuff and now I use Nodejs, Laravel as Backend and React, Tailwind, Alpinejs, bootstrap, etc for Front End.
                </p>
                <p class="mt-5">
                    Born and Raised in Bekasi, Indonesia. Currently, I live in Bekasi with my parents. take S1 Informatics Engineering at Bina Insani University in 2022
                </p>
                <p class="mt-5">
                    I am an enthusiastic, self-motivated, reliable, responsible, and hard-working person. I am a mature team worker and adaptable to all challenging situations. I can work well both in a team environment as well
                </p>
                <p class="mt-5">
                    Lastly, I am very grateful to everyone who came to read my profile, I am open to talk about the possibilities related to technology and SEO optimization. Do not hesitate to get in touch with me below.
                </p>
            </div>
            <div class="wrapper-work">
                <h1 class="mt-10 mb-5 text-4xl font-bold hover:underline">Work Experience</h1>
                <ul>
                    <li>
                        <b>Backend Developer</b> at PT Mitsubishi Krama Yudha Motrs And Manufacturing (Jul 2020 - Aug 2020) - <b>Part Time</b>
                    </li>
                    <li class="mt-4">
                        <b>Mobile Application Developer</b> at Muslim Go Online (Aug 2019 - Dec 2019) - <b>Internship</b>
                    </li>
                </ul>
            </div>
            <div class="wrapper-education">
                <h1 class="mt-10 mb-5 text-4xl font-bold hover:underline">Education</h1>
                <ul>
                    <li>
                        <b>BTech, Information Technology</b>, Bina Insani University (Sep 2021 - present)
                    </li>
                    <li class="mt-4">
                       <b>Computer Software Engineering</b>, SMKN 5 Kota Bekasi (Jul 2018 - Jun 2021)
                    </li>
                </ul>
            </div>
            <div class="wrapper-licences">
                <h1 class="mt-10 mb-5 text-4xl font-bold hover:underline">Licenses and Certifications</h1>
                <ul>
                    <li>
                         <p class="font-bold">CompTIA Cyber Security Analyst</p>
                         <p>at InfraDigital Foundation - <a href="#" class="underline text-primary">View Certificate</a></p>
                    </li>
                    <li class="mt-4">
                        <p class="font-bold">International Hackhaton 2020</p>
                        <p>at Garuda Hacks - <a href="#" class="underline text-primary">View Certificate</a></p>
                   </li>
                   <li class="mt-4">
                        <p class="font-bold">Certificate of Competence in Application Programmer</p>
                        <p>at Badan Nasional Sertifikasi Profesi (BNSP)- <a href="#" class="underline text-primary">View Certificate</a></p>
                    </li>
                    <li class="mt-4">
                        <p class="font-bold">TOEFL Preparation Class</p>
                        <p>at Ibnu Ali Institue (IAI) - <a href="#" class="underline text-primary">View Certificate</a></p>
                   </li>
                </ul>
            </div>
            <div class="wrapper-licences">
                <h1 class="mt-10 mb-5 text-4xl font-bold hover:underline">Awards</h1>
                <ul>
                    <li>
                         <p class="font-bold">2nd Place in the Musabaqah Hifdzil Qur'an (MHQ)</p>
                         <p>at SMP Pgri Astra Insani - 2017</p>
                    </li>
                    <li class="mt-4">
                        <p class="font-bold">2nd Place in the Musabaqah Hifdzil Qur'an (MHQ)</p>
                        <p>at SMKN 5 Kota Bekasi - 2018</p>
                   </li>
                </ul>
            </div>
            <div class="wrapper-contact">
                <h1 class="mt-10 mb-1 text-4xl font-bold hover:underline">Contact Me</h1>
                <h4 class="mt-2 mb-2">
                    Inquiries via email at <a class="underline text-primary" href="mailto:zamsyh.dev@gmail.com">getting in touch</a> or via socials below:
                </h4>
                <ul class="mt-6">
                    <li>
                        Github - <a class="underline text-primary" href="https://github.com/zamisyh">https://github.com/zamisyh</a>
                    </li>
                    <li class="mt-2">
                        Linkedln - <a class="underline text-primary" href="https://www.linkedin.com/in/zamisyh">https://www.linkedin.com/in/zamisyh</a>
                    </li>
                    <li class="mt-2">
                        Instagram - <a class="underline text-primary" href="https://instagram.com/zamisyh">https://instagram.com/zamisyh</a>
                    </li>
                    <li class="mt-2">
                        Dev To - <a class="underline text-primary" href="https://dev.to/zamisyh">https://dev.to/zamisyh</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
