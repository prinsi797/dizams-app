@extends('frontend.layouts.app')
@section('title', 'Home')
<style>
    #abouts {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .card {
        flex: 1 1 calc(50% - 20px);
        margin: 0;
        border: 2px solid transparent;
        border-radius: 20px 80px 20px;
        background-color: #f9f9f9;
        transition: all 0.3s ease;
    }

    .card-body {
        padding: 20px;
        text-align: justify;
        font-size: 1rem;
        color: #333;
        display: flex;
    }

    #abouts .card-body i {
        color: #ff545a;
        width: 20px;
        height: 20px;
        line-height: 20px;
        border-radius: 50%;
        text-align: center;
        font-size: 18px;
        display: inline-block;
        flex-shrink: 0;
    }

    .card:hover {
        border-color: #ff545a;
        transform: scale(1.03);
    }

    .about-container {
        margin-top: 40px;
    }
</style>
@section('content')
    <section id="home" class="welcome-about">
        <div class="container">
            <div class="welcome-about-txt">
                <h2>About</h2>
            </div>
        </div>
    </section>
    <section class="about-container">
        <div class="container">
            <div class="row" id="abouts">
                <!-- Card 1 -->
                <div class="card">
                    <div class="card-body">
                        <i class="fa fa-check-circle"></i>
                        <p style="padding-left: 5px;">
                            I am a dedicated recruitment professional with a Bachelor's degree in Electronics and
                            Communications 🎓,
                            Two certifications in Java Development from NIIT and Five awards in Technical Recruitment.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <i class="fa fa-check-circle"></i>
                        <p style="padding-left: 5px;">
                            I began my career in September 2021 as a Recruiter Trainee at VYZE Inc, where I grew into the
                            role of
                            Recruitment Team Lead by August 2024 📈.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card">
                    <div class="card-body">
                        <i class="fa fa-check-circle"></i>
                        <p style="padding-left: 5px;">
                            Currently, I am thriving as a Digital Talent Scout at Altezzasys Inc mentoring Altezzasys's
                            Recruitment
                            team, collaborating with prestigious clients such as Infor, Accenture, Google, and Apple.
                        </p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="card">
                    <div class="card-body">
                        <i class="fa fa-check-circle"></i>
                        <p style="padding-left: 5px;">
                            Beyond my professional journey, I am passionate about riding 🏍️ and consider myself a bike
                            enthusiast
                            who never misses a chance to hit the road. I also have a love for trying out spicy foods,
                            always seeking
                            new culinary experiences.
                        </p>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="card">
                    <div class="card-body">
                        <i class="fa fa-check-circle"></i>
                        <p style="padding-left: 5px;">
                            I am incredibly grateful for the support of my family. My father has been a fantastic
                            mentor,
                            consistently motivating me to achieve more than I could ever imagine. Meanwhile, my mother
                            has instilled
                            in me the importance of making wise choices and avoiding distractions 🙏.
                        </p>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="card">
                    <div class="card-body">
                        <i class="fa fa-check-circle"></i>
                        <p style="padding-left: 5px;">
                            I cherish my life and the wonderful characters involved in my journey, and I look forward to
                            continued
                            growth and new challenges in my career!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
@endsection
