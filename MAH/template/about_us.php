<?php


/**
 * Template Name: About_us MAH
 * Template Post Type: post, page
 */
get_header();
?>
    <style>
		.MEETOURTEAM .eachCard__Right .head h6 {
			text-align: right;
			
		}
		
		
		
        .MEETOURTEAM h2{
            font-weight: normal;
            font-size: 35px;
            text-align: center;
            text-transform: uppercase;
            color: #000;
        }
        .MEETOURTEAM .eachCard__Left,.MEETOURTEAM .eachCard__Right{
            background: #FFFFFF;
            border: 1px solid #EEEEEE;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
            border-radius: 10px;
            padding: 27px 33px;
            margin-bottom: 55px;
        }
        .MEETOURTEAM .eachCard__Left .head{
            display: flex;
            align-items: flex-end;
            justify-content: end;
        }
        .MEETOURTEAM .eachCard__Right .head{
            display: flex;
            align-items: flex-end;
            justify-content: flex-end;

        }
		.MEETOURTEAM .eachCard__Left .head img{
			border-radius:100%;
            margin-right: 30px;
        }
		.MEETOURTEAM .eachCard__Right .head img{
			 border-radius:100%;
			 margin-left: 30px;
		}
        .MEETOURTEAM .eachCard__Left  p,.MEETOURTEAM .eachCard__Right  p{
            font-size: 17px;
            line-height: 30px;
        }
        .MEETOURTEAM .eachCard__Left .head h6,.MEETOURTEAM .eachCard__Right .head h6{
            color:#25A3DA;
            font-weight: 600;
            font-size: 24px;
            line-height: 37px;
			margin-bottom:0;
        }

        .OURRELIEFDOCTORS h6{
            color: #E50085;
            text-align: center;
            font-weight: normal;
            font-size: 35px;
            line-height: 53px;
            margin-bottom: 28px;
        }
        .OURRELIEFDOCTORS p{
            font-weight: normal;
            font-size: 17px;
            line-height: 30px;
        }
        .OURSTORY2 .left{
            background: #FFFFFF;
            border: 1px solid #EEEEEE;
            box-sizing: border-box;
            box-shadow: 0px 15px 50px rgba(0, 0, 0, 0.08);
            border-radius: 10px 0 0 10px;
            padding: 23px  34px;
        }
        .OURSTORY2 .left h6{
            font-weight: normal;
            font-size: 35px;
            line-height: 50px;
            color: #000;
            margin: 0;
        }
        .OURSTORY2 .left p{
            font-weight: normal;
            font-size: 17px;
            line-height: 30px;
        }
        .OURSTORY2 .right{
            background-color: #85BF3F;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .OURSTORY2:after{
            content: ' ';
            width: 100%;
            height: 256px;
            background-color: #EBEBEC;
            position: absolute;
            top: 170px;
            z-index: -1;

        }

        .CLINICINFORMATION > div{
            background-color: #E50085;
            padding: 31px 28px;
            box-shadow: 0 15px 50px rgba(229, 0, 133, 0.08);
            border-radius: 10px;
            text-align: center;
        }
        .CLINICINFORMATION{
            position: relative;
        }
        .CLINICINFORMATION:after{
            content: "";
            height: 701px;
            width: 100%;
            background-color: #EBEBEC;
            position: absolute;
            z-index: -1;
            top: 220px;

        }


        .CLINICINFORMATION h6{
            font-weight: normal;
            font-size: 35px;
            line-height: 50px;
            margin-bottom: 25px;
            margin-top: 0;
            color: #fff;
        }
        .CLINICINFORMATION small{
            font-weight: bold;
            font-size: 24px;
            line-height: 30px;
            color: #fff;
        }
        .CLINICINFORMATION p{
            font-size: 17px;
            line-height: 30px;
            color: #fff;
            text-align: left;
            font-weight: 300;
        }
        .PATIENTARRIVALPOLICY .wrap{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 45px;
        }
        .PATIENTARRIVALPOLICY .wrap .each{
            background-color: #85BF3F;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 100px;
            padding: 10px;

        }
        .PATIENTARRIVALPOLICY h6{
            font-weight: normal;
            font-size: 35px;
            line-height: 50px;
            color: #85BF3F;
            text-align: center;
            margin-bottom: 33px;
            margin-top: 63px;
        }
        .PATIENTARRIVALPOLICY > div > p{
            color:#000;
            font-weight: normal;
            font-size: 17px;
            line-height: 30px;
        }
        .PATIENTARRIVALPOLICY .wrap .each .icon{
            width: 97px;
            min-width: 97px;
            height: 97px;
            border-radius: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            margin-right: 10px;
        }
        .PATIENTARRIVALPOLICY .wrap .each p{
            color: #fff;
            font-size: 17px;
            line-height: 30px;
            font-weight: 400;
        }
        .EMERGENCYURGENTCARE > div{
            background: #FFFFFF;
            border: 1px solid #EEEEEE;
            box-sizing: border-box;
            box-shadow: 0px 15px 50px rgba(0, 0, 0, 0.08);
            border-radius: 10px;
            padding: 33px 28px;
        }

        .EMERGENCYURGENTCARE > div p{
            font-weight: normal;
            font-size: 17px;
            line-height: 30px;
        }
        .EMERGENCYURGENTCARE > div h6{
            font-weight: 600;
            font-size: 24px;
            line-height: 30px;
            color: #E50085;
            text-align: center;
            margin-top: 48px;
            margin-bottom: 35px;
        }
        .EMERGENCYURGENTCARE h6{
            font-weight: normal;
            font-size: 35px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 45px;
        }
        .EMERGENCYURGENTCARE .wrap .each .icon{
            width: 66px;
            height: 66px;
            border-radius: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #E50085;
            box-shadow: 0 10px 40px rgba(229, 0, 133, 0.15);
            margin-right: 14px;
        }
        .EMERGENCYURGENTCARE .wrap .each{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .EMERGENCYURGENTCARE .wrap .each p{
            font-size: 24px;
            line-height: 50px;
            font-weight: 600;
            color: #000;
        }
        .EMERGENCYURGENTCARE .wrap{
            display: flex;
            justify-content: center;
        }

        .AboutUS > div{
            background: #FFFFFF;
            border: 1px solid #EEEEEE;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
            border-radius: 10px;
            padding: 24px;
        }
        .AboutUS p{
            font-size: 17px;
            line-height: 30px;
        }
        .AboutUS .wrap{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .AboutUS .wrap img{
            margin-right: 27px;
        }
        .AboutUS h1{
            text-align: center;
            color: #000;
            font-weight: normal;
            font-size: 35px;
            line-height: 53px;
            text-transform: uppercase;
        }
		.dog_names{
			font-size:16px!important;
			display:block;
		}

        @media only screen and (max-width: 1000px) {
			.MEETOURTEAM .eachCard__Right .head h6 {
				text-align: left!important;
			}
			
			
            .MEETOURTEAM .eachCard__Left .head {
                flex-direction: column;
				align-items: center;
            }
            .MEETOURTEAM .eachCard__Right .head {
                flex-direction: column-reverse;
				align-items: center;
            }
            .AboutUS .wrap img {
                margin-right: 0!important;
            }
            .AboutUS{
                margin-bottom: 70px!important;
            }
            .MEETOURTEAM .eachCard__Left, .MEETOURTEAM .eachCard__Right {
                padding: 26px 19px;
            }
            .MEETOURTEAM .eachCard__Left .head img, .MEETOURTEAM .eachCard__Right .head img {
                margin-right: 0;
				margin-left: 0;
            }
            .MEETOURTEAM .eachCard__Left .head h6, .MEETOURTEAM .eachCard__Right .head h6 {
                font-size: 22px;
                line-height: 37px;
                margin-bottom: 0;
                margin-top: 20px;
            }
            .OURRELIEFDOCTORS h6 {
                margin-top: 50px!important;
                font-size: 27px;
                line-height: 53px;
            }
            .OURSTORY2{
                margin-top: 73px!important;
                margin-bottom: 55px!important;
            }
            .OURSTORY2 .left {
                padding: 30px 22px;
            }
            .OURSTORY2 .left h6 {
                font-size: 27px;
            }
            .OURSTORY2 .right img{
                max-width: 100%;
            }
            .OURSTORY2 .right{
                padding: 21px;
            }
            .CLINICINFORMATION > div {
                padding: 35px 18px;
            }
            .CLINICINFORMATION h6 {
                font-size: 27px;
            }
            .CLINICINFORMATION small {
                font-size: 20px;
                line-height: 30px;
            }
            .PATIENTARRIVALPOLICY .wrap .each .icon {
                width: 54px;
                height: 54px;
                min-width: 54px;
                min-height: 54px;
            }
            .PATIENTARRIVALPOLICY .wrap .each:first-child{
                margin-bottom: 20px;
                margin-right: 0!important;
            }
            .PATIENTARRIVALPOLICY .wrap .each p {
                font-size: 12px;
                line-height: 17px;
                margin: 0;
                font-weight: 600;
            }
            .PATIENTARRIVALPOLICY .wrap .each .icon svg{
                max-width: 80% !important;
            }
            .PATIENTARRIVALPOLICY h6 {
                font-size: 27px;
                line-height: 40px;
            }
            .EMERGENCYURGENTCARE > div {
                padding: 20px;
            }
            .EMERGENCYURGENTCARE h6 {
                margin-bottom: 25px;
            }
            .EMERGENCYURGENTCARE > div p {
                margin:0;
            }
            .EMERGENCYURGENTCARE > div h6 {
                margin: 27px;
            }
            .EMERGENCYURGENTCARE .wrap {
/*                 justify-content: space-between; */
				justify-content: space-evenly;

            }
            .EMERGENCYURGENTCARE .wrap .each:first-child {
                margin-right: 0!important;
            }
            .EMERGENCYURGENTCARE .wrap .each p {
                font-size: 22px;
            }
            .CLINICINFORMATION:after {
                height: 145%;
            }
            .OURSTORY2:after {
                display: none;
            }
			
        }
    </style>
<div class="per-10 AboutUS" style="margin-top: 14px;margin-bottom: 91px">
    <h1>About <b>US</b></h1>
    <div class="per-8 mrl-auto">
        <div class="wrap flex-direction-column">
            <img class="mw-100m" src='<?php bloginfo("template_directory"); ?>/images/mah_20.png' alt="">
            <p><b>Mabry Animal Hospital</b> offers compassionate, sophisticated medical care for animals. Our veterinary staff handles a gamut of services, including surgeries, dental work, diagnostics, laboratory work, internal medicine, and general wellness care. Our facility is equipped with pharmacy, x-ray, dental suite, medical isolation unit, surgical suite and in-house lab.  We also work closely with local veterinary specialty hospitals and commercial labs to support excellent care for our patients. </p>
        </div>
        <p>
            Our mission is to support owners with peace of mind. It’s scary when your pet suffers a medical emergency—or just starts acting out of the ordinary—and the typical experience of getting care can be confusing, overwhelming and expensive. At Mabry Animal Hospital, we believe there’s a better way forward. We strive to communicate clearly; to use the best tools, systems, and technologies available; and to treat our patients and clients with the tenderness and focused attention they deserve.
        </p>
    </div>
</div>

<div class="per-10 MEETOURTEAM">
    <h2>MEET <b>OUR TEAM</b></h2>
    <div class="per-8 mrl-auto">
        <div class="eachCard__Left">
            <div class="head">
                <img src='<?php bloginfo("template_directory"); ?>/images/mah_13.png' alt="">
               <h6> Leslie M. Brown<br>
                   MS, DVM <span class="dog_names">[Sally, Pitbull Mix, We call her the princess]</span></h6>
            </div>
            <p><b>Dr. Brown</b> is a graduate of UGA CVM and has practiced companion animal medicine<b>for over 27 years</b>.  She is well known for experience with greyhounds and has particular interests in <b>dentistry and internal medicine</b>.</p>
        </div>
        <div class="eachCard__Right">
            <div class="head">
                <h6>Brandi Owens<br>
					MANAGER <span class="dog_names">[Olive, Pitbull mix, Her DNA shows that she is part sheltie]</span></h6>
                <img src='<?php bloginfo("template_directory"); ?>/images/mah_16.png' alt="">

            </div>
            <p>
                <b>Brandi Owens</b> is a California native with a <b>solutions-based approach</b> to practice management.  Her <b>broad experience base</b> and can-do attitude keep the practice running and the clients happy.
            </p>
        </div>
        <div class="eachCard__Left">
            <div class="head">
                <img src='<?php bloginfo("template_directory"); ?>/images/mah_14.png' alt="">
                <h6>Jeanette Hobby<br>
                    Matt, Maggie, and Bonita</h6>
            </div>
            <p>
                <b>Dr. Jeanette Hobby</b> joined Mabry Animal Hospital after practicing in west Ga for the last 9 years. She is a 2006 graduate of Clemson University’s animal and veterinary science program and completed her veterinary degree at Mississippi State University in 2010. She feels strongly every pet family should leave with a clear understanding of their pets' needs for long, healthy lives. Her greatest joy is getting puppies and kittens started off on the right foot when they join their new families. This is done by addressing behavior concerns and each pets’ unique needs from their first visit. Balancing life as a veterinarian and the care provider for a geriatric Labrador has also brought her an enthusiasm for physical therapy and senior care that facilitates graceful aging. When she is not with Mollie the lab mix, Pancho the yorkie-poo, and her three cats (Matt, Maggie, and Bonita), Dr. Hobby enjoys attending concerts and camping.
            </p>
        </div>
        <div class="eachCard__Right">
            <div class="head">
                <h6>Pierce</h6>
                <img src='<?php bloginfo("template_directory"); ?>/images/mah_17.png' alt="">

            </div>
            <p>
                <b>Pierce</b> joined Mabry Animal Hospital in 2019 after graduating from the University of Georgia with a Bachelors of Science in biology. He is an Eagle Scout who grew up in Alpharetta, GA. His future plans include going back to UGA to attend vet school. Pierce enjoys spending time cooking, camping, scuba diving, and spending time with his family. He has a Boston terrier named Sadie who loves sitting in laps, eating treats and licking faces.
            </p>
        </div>
        <div class="eachCard__Left">
            <div class="head">
                <img src='<?php bloginfo("template_directory"); ?>/images/mah_15.png' alt="">
                <h6>Dr. Wesley</h6>
            </div>
            <p>
                Originally from Florida, <b>Dr. Meredith Wesley</b> moved to Atlanta in 1993.  She graduated Suma Cum Laude from Georgia State University before earning her Doctor of Veterinary Medicine from the University of Georgia.  Areas of professional interest for Dr. Wesley include soft tissue surgery, dermatology, and geriatric medicine. She most enjoys forming lasting relationships with clients and their pets.  Dr. Wesley lives in East Cobb with her husband and son. They have two dogs, Peanut and Jelly, and two cats Norris and Pettybones.
            </p>
        </div>
        <div class="eachCard__Right">
            <div class="head">
                <h6>Adrianne</h6>
                <img src='<?php bloginfo("template_directory"); ?>/images/mah_18.png' alt="">

            </div>
            <p>
                <b>Adrianne</b> moved from Missouri to the Atlanta area in the early 90’s. She started working as a Veterinary Assistant over 20 years ago. She took a break to raise her two children, Camdyn and Bryson, before joining the team at Mabry Animal Hospital. Adrianne takes pleasure in assisting both the furry patients and their parents. She will try and help you in any way possible and loves to see joy in others. She enjoys tennis, gardening, music, and spending time with her children and pets. She has three cats: Charlie, Finn, and Leo and one goofy dog, Elliot.
            </p>
        </div>
    </div>
</div>

<div class="per-10 OURRELIEFDOCTORS">
    <div class="per-8 mrl-auto">
        <h6>OUR <b>RELIEF DOCTORS</b></h6>
        <p>On the days that our doctors cannot be in the hospital, we hire the services of a relief veterinarian to cover our normal hours and provide continuity of care for our patients. We understand that it can be unsettling to see a new doctor but assure you that we provide competent, compassionate professionals that share our philosophy and values so that you and your pet are comfortable with the care received.</p>
    </div>
</div>

<div class="per-10 OURSTORY2 p-relative" style="margin-top: 105px;margin-bottom: 153px">
   <div class="per-8 mrl-auto d-flex flex-direction-column">
       <div class="per-6 left mw-100m">
           <h6>OUR <b>STORY</b></h6>
           <p><b>Mabry Animal Hospital</b> began with a dream of being able to expand our medical service offerings and reach more members of the community.  We envisioned a location and hospital space with a homey, welcoming atmosphere and enough physical space for clients, patients, and staff to be comfortable.  Our journey has taken three years from the search for real estate to the end of construction, and now our dream has come true.  We are proud to introduce you to Mabry Animal Hospital.</p>
       </div>
       <div class="per-4 right mw-100m">
           <img src='<?php bloginfo("template_directory"); ?>/images/mah_19.jpg' alt="">
       </div>
   </div>
</div>

<div class="per-10 CLINICINFORMATION">
    <div class="per-8 mrl-auto">
        <h6>CLINIC<br class="d-none d-blockM"> <b>INFORMATION</b></h6>
        <small>APPOINTMENTS</small>
        <p>
            To allow ample time for all patients and scheduled surgical procedures, we operate primarily by appointment. Please let us know all of your concerns when you make an appointment so that enough time is allotted for the doctor to address your questions.
        </p>
        <p>
            Emergency cases shall always receive top priority, which is why occasional appointment delay is inevitable. Please realize that we make a sincere attempt to see each client on time.
        </p>
        <p>
            For your convenience, "drop-off" appointments are available. A "drop off" means you may bring your pet and leave him/her with us until the doctor can examine him/her. Usually, we will ask you to drop off sometime in the morning so our doctor can examine the patient as time allows or at the time purposely reserved for admitted patients. Once the doctor is done, you will receive a phone call to go over the diagnosis and to give you discharge instructions.
        </p>
    </div>
</div>

<div class="per-10 PATIENTARRIVALPOLICY">
    <div class="per-8 mrl-auto">
        <h6>PATIENT<br class="d-none d-blockM"> <b>ARRIVAL POLICY</b></h6>
        <p>
            For the safety of animals in our care and humans in our facility, we require that pets' vaccinations be up to date. Even though we make every effort to make our patients feel comfortable during visits, they may be a little uneasy about new people, new surroundings, and other pets. This is one of the reasons we ask you to restrain your pets.
        </p>
        <div class="wrap flex-direction-column">
            <div class="each per-5 mw-100m" style="margin-right: 19px">
                <div class="icon">
                    <svg width="73" height="63" viewBox="0 0 73 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M69.9382 15.9538C67.5833 12.1109 64.4043 8.38447 62.1672 6.52126C57.3398 2.32902 53.3365 2.44547 51.3349 2.79482C50.5107 3.02773 49.8043 3.26063 49.0978 3.72643C45.6833 1.28096 41.5624 0 36.4995 0C31.4365 0 27.3156 1.28096 23.9011 3.72643C23.1946 3.37708 22.4882 3.02773 21.664 2.79482C19.6623 2.44547 15.6591 2.32902 10.8317 6.52126C8.59461 8.50093 5.41557 12.1109 3.06074 15.9538C-0.118298 21.1941 -0.824749 25.3863 0.94138 28.5305C3.06074 32.3734 6.35751 33.305 8.94783 33.5379C8.24138 35.9834 7.88815 38.6617 7.88815 42.0388C7.88815 46.464 8.94783 50.1904 10.9494 53.3346C12.7156 56.0129 15.1882 58.2255 18.4849 59.7394C24.4898 62.6507 31.672 63 36.4995 63C41.3269 63 48.5091 62.6507 54.514 59.7394C57.693 58.2255 60.2833 56.0129 62.0495 53.3346C64.0511 50.3068 65.1107 46.464 65.1107 42.0388C65.1107 38.7782 64.7575 36.0998 64.0511 33.5379C66.6414 33.305 69.9382 32.3734 72.0575 28.5305C73.8236 25.5028 73.1172 21.1941 69.9382 15.9538ZM10.3607 29.2292C8.0059 29.1128 6.12203 28.7634 4.82686 26.4344C3.88493 24.8041 4.70912 21.8928 6.82848 18.2828C8.94783 14.7893 11.8914 11.5287 13.7753 9.89834C16.8365 7.21996 19.1914 6.98706 20.2511 7.21996C16.9543 11.1793 14.9527 16.3031 13.3043 21.1941C12.5978 23.2902 11.8914 25.037 11.3027 26.6673C11.0672 27.4824 10.714 28.4141 10.3607 29.2292ZM33.5559 43.7856C32.3785 42.6211 31.7898 41.4566 31.7898 40.8743C31.7898 40.2921 31.9075 40.2921 32.2607 40.1756C33.2027 39.8263 35.2043 39.7098 36.4995 39.7098C37.7946 39.7098 39.7962 39.7098 40.7382 40.1756C41.0914 40.2921 41.2091 40.4085 41.2091 40.8743C41.2091 41.4566 40.6204 42.6211 39.443 43.7856C38.2656 44.9501 37.0882 45.5323 36.4995 45.5323C35.9107 45.5323 34.7333 44.8336 33.5559 43.7856ZM52.5124 55.78C49.0978 57.4104 44.5059 58.342 38.7365 58.4584V49.3752C40.5027 48.6765 41.9156 47.3956 42.622 46.8133C43.564 45.8817 45.6833 43.4362 45.6833 40.7579C45.6833 38.5453 44.5059 36.7985 42.5043 35.9834C41.0914 35.4011 39.443 35.1682 36.4995 35.1682C33.5559 35.1682 31.9075 35.4011 30.4946 35.9834C28.493 36.7985 27.3156 38.5453 27.3156 40.7579C27.3156 43.4362 29.4349 45.8817 30.3769 46.8133C31.0833 47.512 32.4962 48.6765 34.2624 49.3752V58.4584C28.3753 58.2255 23.9011 57.4104 20.4865 55.78C15.0704 53.2181 12.4801 48.6765 12.4801 42.0388C12.4801 36.3327 13.7753 32.9556 15.6591 28.1811C16.2478 26.5508 16.9543 24.6876 17.6607 22.475C21.5462 10.8299 25.7849 4.42514 36.4995 4.42514C47.214 4.42514 51.4527 10.8299 55.3382 22.475C56.0446 24.5712 56.7511 26.4344 57.4575 28.1811C59.2236 32.9556 60.6366 36.4492 60.6366 42.0388C60.5188 48.6765 57.9285 53.2181 52.5124 55.78ZM68.172 26.4344C66.8769 28.7634 64.993 29.2292 62.6382 29.2292C62.2849 28.4141 62.0495 27.4824 61.6962 26.5508C61.1075 24.8041 60.4011 23.0573 59.6946 21.0776C58.0462 16.0702 56.0446 11.0628 52.7478 7.10351C53.8075 6.98706 56.1624 7.10351 59.2236 9.78189C61.1075 11.4122 64.0511 14.7893 66.1704 18.1664C68.2898 21.8928 68.9962 24.9205 68.172 26.4344Z" fill="#85BF3F"/>
                            <path d="M29.0822 23.5229C27.4338 23.5229 26.1387 24.8039 26.1387 26.4342C26.1387 28.0645 27.4338 29.3455 29.0822 29.3455C30.7306 29.3455 32.0258 28.0645 32.0258 26.4342C32.0258 24.8039 30.7306 23.5229 29.0822 23.5229Z" fill="#85BF3F"/>
                            <path d="M43.9177 23.4067C42.2693 23.4067 40.9741 24.6877 40.9741 26.318C40.9741 27.9483 42.2693 29.2293 43.9177 29.2293C45.5661 29.2293 46.8612 27.9483 46.8612 26.318C46.8612 24.8041 45.5661 23.4067 43.9177 23.4067Z" fill="#85BF3F"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="73" height="63" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>

                </div>
                <p>
                    Dogs - must be on a leash and properly controlled while in the waiting area or exam rooms.
                </p>
            </div>
            <div class="each per-5 mw-100m">
                <div class="icon">
                    <svg width="63" height="58" viewBox="0 0 63 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.7059 21.6738C23.2647 21.6738 22.0294 22.8949 22.0294 24.3194C22.0294 25.8458 23.2647 26.9651 24.7059 26.9651C26.1471 26.9651 27.3824 25.744 27.3824 24.3194C27.3824 22.8949 26.1471 21.6738 24.7059 21.6738Z" fill="#85BF3F"/>
                        <path d="M38.2942 21.6738C36.75 21.6738 35.6177 22.8949 35.6177 24.4212C35.6177 25.9475 36.853 27.1686 38.2942 27.1686C39.8383 27.1686 40.9706 25.9475 40.9706 24.4212C40.9706 22.8949 39.8383 21.6738 38.2942 21.6738Z" fill="#85BF3F"/>
                        <path d="M57.6471 44.0598C59.2941 40.8037 60.1177 37.1405 60.1177 33.0704L61.353 32.7651C62.4853 32.5616 63.103 31.4423 62.8971 30.323C62.6912 29.2037 61.5588 28.5932 60.4265 28.7967L59.8088 28.8984C59.5 26.7616 58.9853 24.523 58.1618 22.4879C60.4265 16.0774 60.7353 8.64931 58.8824 1.42475C58.5735 0.305451 57.4412 -0.305075 56.3088 0.000188336C55.5883 0.305452 47.9706 2.44229 44.3677 5.90194C43.853 5.59668 43.3382 5.29142 42.7206 5.08791C39.1177 3.35808 35.3088 2.44229 31.3971 2.44229C27.4853 2.44229 23.6765 3.35808 20.0735 5.08791C19.5588 5.39317 18.9412 5.59668 18.4265 5.90194C15.0294 2.44229 7.41178 0.305452 6.58825 0.101943C5.4559 -0.20332 4.32354 0.407206 4.01472 1.5265C2.16178 8.75107 2.4706 16.1791 4.73531 22.5897C3.91178 24.7265 3.39707 26.8634 3.08825 29.0002L2.4706 28.8984C1.33825 28.6949 0.308837 29.3055 1.32844e-05 30.4248C-0.205869 31.5441 0.411778 32.5616 1.54413 32.8669L2.77943 33.1721C2.77943 37.1405 3.60295 40.9055 5.25001 44.1616L1.54413 44.9756C0.411778 45.1791 -0.205869 46.2984 1.32844e-05 47.4177C0.205896 48.537 1.33825 49.1476 2.4706 48.9441L7.61766 47.723C8.64707 49.1476 9.98531 50.3686 11.3235 51.4879C16.4706 55.6598 23.6765 58.0002 31.5 58.0002C39.3235 58.0002 46.5294 55.6598 51.6765 51.4879C53.1177 50.3686 54.353 49.0458 55.3824 47.723L60.5294 48.9441C61.6618 49.1476 62.6912 48.537 63 47.4177C63.2059 46.2984 62.5883 45.2809 61.4559 44.9756L57.6471 44.0598ZM7.51472 4.57914C9.88237 5.39317 13.0735 6.71598 15.0294 8.2423C13.5883 9.36159 12.25 10.5826 11.0147 12.0072C9.67648 13.5335 8.44119 15.2633 7.30884 16.9932C6.69119 13.0248 6.69119 8.85282 7.51472 4.57914ZM28.8235 40.2949C27.7941 39.2774 27.1765 38.1581 27.1765 37.6493C27.1765 37.1405 27.2794 37.1405 27.5882 37.0388C28.5147 36.6318 30.2647 36.6318 31.5 36.6318C32.7353 36.6318 34.4853 36.6318 35.4118 37.0388C35.7206 37.1405 35.8235 37.2423 35.8235 37.6493C35.8235 38.1581 35.3088 39.2774 34.1765 40.2949C33.1471 41.3125 32.0147 41.923 31.5 41.923C30.9853 41.8212 29.853 41.3125 28.8235 40.2949ZM53.5294 43.1441L47.6618 41.7195C46.5294 41.516 45.5 42.1265 45.1912 43.2458C44.9853 44.3651 45.603 45.3827 46.7353 45.6879L50.9559 46.6037C50.3383 47.2142 49.7206 47.723 49.103 48.3335C45.0883 51.5897 39.6324 53.523 33.6618 53.8283V45.4844C35.3088 44.8739 36.5441 43.7546 37.1618 43.1441C37.9853 42.33 39.9412 40.0914 39.9412 37.5476C39.9412 35.5125 38.9118 33.9862 37.0588 33.1721C35.8235 32.6633 34.1765 32.4598 31.603 32.4598C28.9265 32.4598 27.3824 32.6633 26.1471 33.1721C24.2941 33.9862 23.2647 35.5125 23.2647 37.5476C23.2647 40.0914 25.2206 42.2283 26.0441 43.1441C26.6618 43.7546 28 44.8739 29.5441 45.4844V53.93C23.4706 53.6248 18.0147 51.6914 14.103 48.4353C13.4853 47.9265 12.8677 47.316 12.25 46.7055L16.4706 45.7897C17.603 45.5862 18.2206 44.4669 18.0147 43.3476C17.8088 42.2283 16.6765 41.6177 15.5441 41.8212L9.67648 43.1441C8.13237 40.4984 7.30884 37.4458 7.10295 34.0879L15.5441 36.0212C16.6765 36.2248 17.7059 35.6142 18.0147 34.4949C18.2206 33.3756 17.603 32.3581 16.4706 32.0528L7.30884 29.916C8.02942 24.4212 10.5 18.9265 14.4118 14.6528C19.1471 9.36159 25.3235 6.41072 31.7059 6.41072C38.0882 6.41072 44.2647 9.36159 49 14.6528C52.9118 19.0283 55.3824 24.4212 56.103 29.916L46.9412 32.0528C45.8088 32.2563 45.1912 33.3756 45.3971 34.4949C45.603 35.6142 46.7353 36.2248 47.8677 36.0212L56.3088 34.0879C55.8971 37.3441 55.0735 40.3967 53.5294 43.1441ZM55.5883 16.8914C54.5588 15.1616 53.3235 13.4318 51.8824 11.9055C50.6471 10.4809 49.3088 9.25984 47.8677 8.14054C49.8235 6.61422 53.1177 5.29142 55.3824 4.47738C56.2059 8.85282 56.3088 13.0248 55.5883 16.8914Z" fill="#85BF3F"/>
                    </svg>

                </div>
                <p>
                    Cats -be must be contained in appropriate transport carriers while in the waiting area.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="per-10 EMERGENCYURGENTCARE">
    <h6><b>EMERGENCY<br class="d-none d-blockM"></b> & URGENT CARE</h6>
    <div class="per-8 mrl-auto" style="background: url('<?php bloginfo("template_directory"); ?>/images/bg_1.png') no-repeat;background-position: center center;">

        <p>
            We are able to handle most of your pet's urgent or emergency needs. Depending on the nature of the problem, referral to a specialist or critical care unit may be required. If you feel that your pet needs emergency treatment, do not hesitate to call us immediately so a team member can advise you on the best course of action.
        </p>
        <h6>TYPES OF PETS SEEN</h6>
        <div class="wrap">
            <div class="each" style="margin-right: 75px">
                <div class="icon">
                    <svg width="43" height="37" viewBox="0 0 43 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M41.1957 9.36969C39.8086 7.11275 37.936 4.92421 36.6182 3.82994C33.7747 1.36784 31.4166 1.43623 30.2376 1.6414C29.7521 1.77819 29.336 1.91497 28.9198 2.18854C26.9086 0.752311 24.4811 0 21.4989 0C18.5166 0 16.0892 0.752311 14.0779 2.18854C13.6618 1.98336 13.2457 1.77819 12.7602 1.6414C11.5811 1.43623 9.22307 1.36784 6.37952 3.82994C5.06178 4.99261 3.1892 7.11275 1.8021 9.36969C-0.070479 12.4473 -0.486608 14.9094 0.553715 16.756C1.8021 19.0129 3.74404 19.5601 5.26984 19.6969C4.85371 21.1331 4.64565 22.7061 4.64565 24.6895C4.64565 27.2884 5.26984 29.4769 6.44888 31.3235C7.4892 32.8965 8.94565 34.1959 10.8876 35.085C14.4247 36.7948 18.6553 37 21.4989 37C24.3424 37 28.5731 36.7948 32.1102 35.085C33.9827 34.1959 35.5086 32.8965 36.5489 31.3235C37.7279 29.5453 38.3521 27.2884 38.3521 24.6895C38.3521 22.7745 38.144 21.2015 37.7279 19.6969C39.2537 19.5601 41.1957 19.0129 42.444 16.756C43.4844 14.9778 43.0682 12.4473 41.1957 9.36969ZM6.1021 17.1664C4.71501 17.098 3.60533 16.8928 2.84242 15.525C2.28759 14.5675 2.77307 12.8577 4.02146 10.7375C5.26984 8.68577 7.00372 6.7708 8.11339 5.81331C9.91662 4.2403 11.3037 4.10351 11.9279 4.2403C9.98597 6.56562 8.80694 9.57486 7.83597 12.4473C7.41984 13.6784 7.00372 14.7043 6.65694 15.6617C6.51823 16.1405 6.31017 16.6876 6.1021 17.1664ZM19.765 25.7153C19.0715 25.0314 18.7247 24.3475 18.7247 24.0055C18.7247 23.6636 18.794 23.6636 19.0021 23.5952C19.5569 23.39 20.736 23.3216 21.4989 23.3216C22.2618 23.3216 23.4408 23.3216 23.9956 23.5952C24.2037 23.6636 24.2731 23.732 24.2731 24.0055C24.2731 24.3475 23.9263 25.0314 23.2327 25.7153C22.5392 26.3993 21.8457 26.7412 21.4989 26.7412C21.1521 26.7412 20.4586 26.3309 19.765 25.7153ZM30.9311 32.7597C28.9198 33.7172 26.215 34.2643 22.8166 34.3327V28.9982C23.8569 28.5878 24.6892 27.8355 25.1053 27.4935C25.6602 26.9464 26.9086 25.5102 26.9086 23.9372C26.9086 22.6377 26.215 21.6118 25.036 21.1331C24.2037 20.7911 23.2327 20.6543 21.4989 20.6543C19.765 20.6543 18.794 20.7911 17.9618 21.1331C16.7827 21.6118 16.0892 22.6377 16.0892 23.9372C16.0892 25.5102 17.3376 26.9464 17.8924 27.4935C18.3086 27.9039 19.1408 28.5878 20.1811 28.9982V34.3327C16.7134 34.1959 14.0779 33.7172 12.0666 32.7597C8.8763 31.2551 7.35049 28.5878 7.35049 24.6895C7.35049 21.3383 8.11339 19.3549 9.22307 16.5508C9.56984 15.5933 9.98597 14.4991 10.4021 13.1996C12.6908 6.36044 15.1876 2.59889 21.4989 2.59889C27.8102 2.59889 30.3069 6.36044 32.5957 13.1996C33.0118 14.4307 33.4279 15.525 33.844 16.5508C34.8844 19.3549 35.7166 21.4067 35.7166 24.6895C35.6473 28.5878 34.1215 31.2551 30.9311 32.7597ZM40.1553 15.525C39.3924 16.8928 38.2827 17.1664 36.8957 17.1664C36.6876 16.6876 36.5489 16.1405 36.3408 15.5933C35.994 14.5675 35.5779 13.5416 35.1618 12.3789C34.1908 9.43808 33.0118 6.49723 31.0698 4.1719C31.694 4.10351 33.0811 4.1719 34.8844 5.74492C35.994 6.7024 37.7279 8.68577 38.9763 10.6691C40.2247 12.8577 40.6408 14.6359 40.1553 15.525Z" fill="#E50085"/>
                            <path d="M17.1306 13.8149C16.1596 13.8149 15.3967 14.5673 15.3967 15.5247C15.3967 16.4822 16.1596 17.2345 17.1306 17.2345C18.1016 17.2345 18.8645 16.4822 18.8645 15.5247C18.8645 14.5673 18.1016 13.8149 17.1306 13.8149Z" fill="#E50085"/>
                            <path d="M25.8693 13.7466C24.8983 13.7466 24.1354 14.4989 24.1354 15.4564C24.1354 16.4139 24.8983 17.1662 25.8693 17.1662C26.8403 17.1662 27.6032 16.4139 27.6032 15.4564C27.6032 14.5673 26.8403 13.7466 25.8693 13.7466Z" fill="#E50085"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="43" height="37" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>

                </div>
                <p>Dogs</p>
            </div>
            <div class="each">
                <div class="icon">
                    <svg width="40" height="37" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M15.6863 13.8267C14.7713 13.8267 13.9869 14.6056 13.9869 15.5144C13.9869 16.4881 14.7713 17.2021 15.6863 17.2021C16.6013 17.2021 17.3856 16.4232 17.3856 15.5144C17.3856 14.6056 16.6013 13.8267 15.6863 13.8267Z" fill="#E50085"/>
                            <path d="M24.3137 13.8267C23.3333 13.8267 22.6144 14.6056 22.6144 15.5793C22.6144 16.553 23.3987 17.3319 24.3137 17.3319C25.2941 17.3319 26.0131 16.553 26.0131 15.5793C26.0131 14.6056 25.2941 13.8267 24.3137 13.8267Z" fill="#E50085"/>
                            <path d="M36.6013 28.1072C37.6471 26.03 38.1699 23.6931 38.1699 21.0966L38.9543 20.9019C39.6732 20.7721 40.0654 20.0581 39.9346 19.344C39.8039 18.63 39.085 18.2405 38.366 18.3703L37.9739 18.4352C37.7778 17.0721 37.451 15.644 36.9281 14.3458C38.366 10.2563 38.5621 5.5177 37.3856 0.908926C37.1895 0.194891 36.4706 -0.194583 35.7516 0.000153821C35.2941 0.194891 30.4575 1.55805 28.1699 3.76507C27.8431 3.57033 27.5163 3.37559 27.1242 3.24577C24.8366 2.14226 22.4183 1.55805 19.9346 1.55805C17.451 1.55805 15.0327 2.14226 12.7451 3.24577C12.4183 3.44051 12.0261 3.57033 11.6994 3.76507C9.54249 1.55805 4.70589 0.194891 4.18301 0.0650661C3.46406 -0.129671 2.7451 0.259803 2.54902 0.973838C1.37255 5.58261 1.56863 10.3212 3.00654 14.4107C2.48366 15.7738 2.15687 17.137 1.96079 18.5002L1.56863 18.4352C0.849678 18.3054 0.196083 18.6949 4.55789e-06 19.4089C-0.130714 20.123 0.261442 20.7721 0.980397 20.9668L1.76471 21.1616C1.76471 23.6931 2.28759 26.0949 3.33334 28.1721L0.980397 28.6914C0.261442 28.8212 -0.130714 29.5352 4.55789e-06 30.2493C0.130724 30.9633 0.849678 31.3528 1.56863 31.223L4.83661 30.444C5.4902 31.3528 6.33987 32.1317 7.18955 32.8458C10.4575 35.5072 15.0327 37.0002 20 37.0002C24.9673 37.0002 29.5425 35.5072 32.8105 32.8458C33.7255 32.1317 34.5098 31.2879 35.1634 30.444L38.4314 31.223C39.1503 31.3528 39.8039 30.9633 40 30.2493C40.1307 29.5352 39.7386 28.8861 39.0196 28.6914L36.6013 28.1072ZM4.77125 2.92121C6.27451 3.44051 8.30066 4.28437 9.54249 5.25805C8.62746 5.97209 7.77778 6.75103 6.99347 7.6598C6.1438 8.63349 5.35948 9.737 4.64053 10.8405C4.24837 8.30893 4.24837 5.64752 4.77125 2.92121ZM18.3007 25.7054C17.6471 25.0563 17.2549 24.3423 17.2549 24.0177C17.2549 23.6931 17.3203 23.6931 17.5163 23.6282C18.1046 23.3686 19.2157 23.3686 20 23.3686C20.7843 23.3686 21.8954 23.3686 22.4837 23.6282C22.6797 23.6931 22.7451 23.7581 22.7451 24.0177C22.7451 24.3423 22.4183 25.0563 21.6994 25.7054C21.0458 26.3545 20.3268 26.744 20 26.744C19.6732 26.6791 18.9543 26.3545 18.3007 25.7054ZM33.9869 27.523L30.2614 26.6142C29.5425 26.4844 28.8889 26.8738 28.6928 27.5879C28.5621 28.3019 28.9543 28.951 29.6732 29.1458L32.3529 29.73C31.9608 30.1195 31.5686 30.444 31.1765 30.8335C28.6275 32.9107 25.1634 34.144 21.3726 34.3388V29.0159C22.4183 28.6265 23.2026 27.9124 23.5948 27.523C24.1177 27.0037 25.3595 25.5756 25.3595 23.9528C25.3595 22.6545 24.7059 21.6809 23.5294 21.1616C22.7451 20.837 21.6994 20.7072 20.0654 20.7072C18.366 20.7072 17.3856 20.837 16.6013 21.1616C15.4248 21.6809 14.7712 22.6545 14.7712 23.9528C14.7712 25.5756 16.0131 26.9388 16.536 27.523C16.9281 27.9124 17.7778 28.6265 18.7582 29.0159V34.4037C14.902 34.2089 11.4379 32.9756 8.95425 30.8984C8.5621 30.5738 8.16994 30.1844 7.77778 29.7949L10.4575 29.2107C11.1765 29.0809 11.5686 28.3668 11.4379 27.6528C11.3072 26.9388 10.5882 26.5493 9.86929 26.6791L6.1438 27.523C5.1634 25.8352 4.64053 23.8879 4.50981 21.7458L9.86929 22.9791C10.5882 23.1089 11.2418 22.7195 11.4379 22.0054C11.5686 21.2914 11.1765 20.6423 10.4575 20.4475L4.64053 19.0844C5.09804 15.5791 6.66667 12.0738 9.15033 9.34752C12.1569 5.97208 16.0784 4.08963 20.1307 4.08963C24.183 4.08963 28.1046 5.97208 31.1111 9.34752C33.5948 12.1388 35.1634 15.5791 35.6209 19.0844L29.8039 20.4475C29.085 20.5774 28.6928 21.2914 28.8235 22.0054C28.9543 22.7195 29.6732 23.1089 30.3922 22.9791L35.7516 21.7458C35.4902 23.823 34.9673 25.7703 33.9869 27.523ZM35.2941 10.7756C34.6405 9.67209 33.8562 8.56858 32.9412 7.59489C32.1569 6.68612 31.3072 5.90717 30.3922 5.19314C31.634 4.21945 33.7255 3.37559 35.1634 2.85629C35.6863 5.64752 35.7516 8.30893 35.2941 10.7756Z" fill="#E50085"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="40" height="37" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>

                </div>
                <p>Cats</p>
            </div>
        </div>
    </div>
</div>

    <script>

        $('.sa_logo').children().remove()
        let logo = '<?php bloginfo("template_directory"); ?>/images/about-us-logo.png';
        $('.sa_logo').html('<img src='+logo+' alt="">')
    </script>


<?php get_footer(); ?>