<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SOFT CACTUS - Agence de communication digitale</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('imgs/logo-purple.png') }}" id="faviconTag" />
    {{-- <link href="https://fonts.cdnfonts.com/css/kamerik205" rel="stylesheet"> --}}
    <style>
        @import url('https://fonts.cdnfonts.com/css/kamerik205?styles=30958,30960,30962,30964,30966,30957,30959,30961,30963,30965');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow: hidden;
        }

        .comingSoonBg {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            object-position: center;
            position: absolute;
            z-index: -1;
        }

        section {
            width: 95%;
            height: 100vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: auto;
            position: relative;
        }

        .leftside {
            width: 60%;
            height: calc(100% - 40px);
            margin-bottom: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
        }

        .leftside svg {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .rightside {
            width: 40%;
            height: calc(100% - 40px);
            /* margin-bottom: 40px; */
            margin: auto;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: column;
            position: relative;
        }

        .rightside .first {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            align-self: flex-end;
        }

        .rightside .first .line {
            width: 100%;
            display: flex;
            /* justify-content: center; */
            align-items: center;
            font-family: 'Kamerik 205', sans-serif;
            font-size: 32px;
            color: #310F51;
            letter-spacing: 8px;
        }

        .rightside .second {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .rightside .third {
            width: 100%;
            font-family: 'Kamerik 205', sans-serif;
            font-size: 26px;
            color: #310F51;
            white-space: nowrap;
            text-align: end;
        }

        b {
            font-weight: 900;
        }


        .rightside svg {
            width: 70%;
        }

        .leftside h1 {
            font-size: 10rem;
            font-weight: 900;
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .side_section {
            width: 100vh;
            /* height: 40px; */
            position: absolute;
            left: -50vh;
            transform: rotate(-90deg);
            display: flex;
            justify-content: space-around;
        }

        .side_section div a {
            font-family: 'Kamerik 205', sans-serif;
            font-size: 1rem;
            font-weight: 200;
            color: #fff;
            text-decoration: none;
        }

        p.line_trough {
            text-decoration: line-through;
        }
        bounce{
            animation: bounce 1s infinite ease-in-out;
        }
        @keyframes bounce {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <img src="{{ asset('imgs/comingSoonBg.png') }}" alt="" class="comingSoonBg">
    <section>
        <div class="leftside">
            <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="1088.133" height="716.746"
                viewBox="0 0 1088.133 716.746">
                <g id="svg" data-name="5" transform="translate(255.688)">
                    <path id="_5_2" data-name="5 copy"
                        d="M516.4,386.056q71.622,0,121.863,51.863T688.5,563.607q0,72.89-50.235,124.285T516.4,739.288q-71.647,0-123.262-51.863-51.631-51.863-51.631-123.818H278.248q0,98.121,69.772,167.739T516.4,800.964q101.387,0,169.311-68.217,67.9-68.2,67.912-169.141,0-101.843-67.912-170.541T516.4,324.382q-56.3,0-108.814,27.1l-1.875-1.1,34.464-202.62H685.712V84.218H388.952L327.539,435.584,389.883,446.8q51.151-60.733,126.518-60.741Z"
                        transform="translate(-278.248 -84.218)" fill="#e0da36" fill-rule="evenodd" />
                    <g id="YEA" data-name="Group 1" transform="translate(-256.063 300.784)">
                        <path id="Path_1" data-name="Path 1"
                            d="M91.8,66.9q.852,1.7,1.7-.009L123.92,5.777a1.435,1.435,0,0,1,1.3-.777h58.74a.693.693,0,0,1,.582.311.6.6,0,0,1,.015.625q-32.637,55.457-64.962,110.508a6.64,6.64,0,0,0-.947,3.427v75.577a.8.8,0,0,1-.824.768H67.511a.871.871,0,0,1-.9-.839q-.1-37.59-.057-75.506a6.645,6.645,0,0,0-.938-3.418Q33.235,61.331.437,5.671a.424.424,0,0,1,.005-.45A.491.491,0,0,1,.863,5h59.2a1.387,1.387,0,0,1,1.25.751Z"
                            transform="translate(0 -0.584)" fill="#310f51" />
                        <path id="Path_2" data-name="Path 2"
                            d="M268.371,149.353l90.505.053a.8.8,0,0,1,.834.768v45.274a.8.8,0,0,1-.824.768H216.64a.862.862,0,0,1-.89-.83V5.583A.605.605,0,0,1,216.375,5h142.71a.605.605,0,0,1,.625.583v45.5a.752.752,0,0,1-.777.724H268.476a.614.614,0,0,0-.635.592l.057,24.642a.628.628,0,0,0,.653.6h72.6a.779.779,0,0,1,.8.751V122.8a.8.8,0,0,1-.824.768H268.476a.614.614,0,0,0-.635.592l.057,24.757A.454.454,0,0,0,268.371,149.353Z"
                            transform="translate(-11.391 -0.584)" fill="#310f51" />
                        <path id="Path_3" data-name="Path 3"
                            d="M444.111,19.273q2.453-6.916,5.01-13.8a.657.657,0,0,1,.626-.415L500.814,5a.911.911,0,0,1,.862.583l67.6,189.988a.468.468,0,0,1-.077.441.542.542,0,0,1-.425.2H515.314a.8.8,0,0,1-.767-.53l-8.609-27.176a.828.828,0,0,0-.8-.556H445.5a.851.851,0,0,0-.824.574l-8.562,27.256a.645.645,0,0,1-.625.433H381.971a.524.524,0,0,1-.413-.2.45.45,0,0,1-.07-.428Q412.8,107.409,444.111,19.273Zm29.824,45.371-15.58,60.995a.444.444,0,0,0,.092.4.516.516,0,0,0,.4.178h33.139a.394.394,0,0,0,.3-.138.357.357,0,0,0,.075-.313q-7.567-30.1-15.286-59.944-.019-.08-.133-.768-.246-1.51-2.3-1.077A.917.917,0,0,0,473.935,64.643Z"
                            transform="translate(-20.156 -0.584)" fill="#310f51" />
                    </g>
                    <path id="_5_1" data-name="5"
                        d="M498.894,386.056q71.622,0,121.863,51.863t50.235,125.687q0,72.89-50.235,124.285t-121.863,51.4q-71.647,0-123.263-51.863Q324,635.562,324,563.607H260.742q0,98.121,69.771,167.739t168.382,69.618q101.385,0,169.311-68.217,67.9-68.2,67.911-169.141,0-101.843-67.911-170.541T498.894,324.382q-56.3,0-108.815,27.1l-1.874-1.1,34.464-202.62H668.205V84.218H371.443L310.032,435.584,372.376,446.8q51.151-60.733,126.519-60.741Z"
                        transform="translate(-277.742 -84.218)" fill="#e9e9e9" fill-rule="evenodd" />
                    <g id="RS" data-name="Group 2" transform="translate(-256.063 300.784)">
                        <path id="Path_4" data-name="Path 4"
                            d="M652.4,144.822l-.057,50.714a.646.646,0,0,1-.663.627l-50.4.053a1,1,0,0,1-1.032-.963V5.609A.633.633,0,0,1,600.9,5H675.07Q691.435,5,694,5.2a73.172,73.172,0,0,1,31.415,9.645,70.157,70.157,0,0,1,14.557,11.217Q758.2,44.365,759.6,70.8a64.929,64.929,0,0,1-3.741,25.852,61.557,61.557,0,0,1-8.524,15.686,83.634,83.634,0,0,1-19.946,19.077.911.911,0,0,0-.323,1.175l31.729,62.779a.559.559,0,0,1-.037.574.647.647,0,0,1-.541.274l-57.043-.053a.708.708,0,0,1-.654-.406l-23.432-50.97a.728.728,0,0,0-.663-.406H652.87A.458.458,0,0,0,652.4,144.822Zm45.7-53.435q8.8-9.98,6.1-22.575a23.971,23.971,0,0,0-7.075-12.029,18.937,18.937,0,0,0-4.045-3.065,11.275,11.275,0,0,0-4.981-1.687q-17.285-.38-35.223-.212a.513.513,0,0,0-.53.495v44.4a.6.6,0,0,0,.624.583q16.31,0,32.287-.115A16.547,16.547,0,0,0,698.095,91.387Z"
                            transform="translate(-31.727 -0.584)" fill="#310f51" />
                        <path id="Path_5" data-name="Path 5"
                            d="M860.931,0H867.8a158.9,158.9,0,0,1,16.044,1.537,73.523,73.523,0,0,1,29.417,10.775A51.527,51.527,0,0,1,935.6,42.96a65.216,65.216,0,0,1,2.226,16.931.633.633,0,0,1-.654.609H884.315a.894.894,0,0,1-.919-.8q-.842-13.513-14.235-16.419a27.573,27.573,0,0,0-11.442.168,18.425,18.425,0,0,0-7.017,2.738,11.867,11.867,0,0,0-4.519,6.085,18.07,18.07,0,0,0-.691,8.576,11.527,11.527,0,0,0,5.02,7.772,41.5,41.5,0,0,0,9.651,4.69q4.385,1.6,24.426,5.352a100.21,100.21,0,0,1,36.369,14.131,39.9,39.9,0,0,1,13.742,15.4,62.252,62.252,0,0,1,6.7,21.418,80.287,80.287,0,0,1,.483,13.7,63.383,63.383,0,0,1-2.15,13.619,50.181,50.181,0,0,1-7.453,16.128,51.044,51.044,0,0,1-14.4,13.469,80.892,80.892,0,0,1-26.235,10.616,124.888,124.888,0,0,1-23.433,2.809A138.418,138.418,0,0,1,849.3,199.2a98.686,98.686,0,0,1-17.778-3.692,72.024,72.024,0,0,1-16.347-7.216Q787.4,171.414,787,137.8a.648.648,0,0,1,.208-.48.747.747,0,0,1,.513-.2h53.274a.857.857,0,0,1,.881.821,20.992,20.992,0,0,0,4.612,13.036q2.87,3.719,8.694,5.167a34.878,34.878,0,0,0,7.9,1.016,43.333,43.333,0,0,0,7.878-.547,23.721,23.721,0,0,0,8.951-3.445,15.761,15.761,0,0,0,6.6-18.177,18.068,18.068,0,0,0-6.9-8.956A34.906,34.906,0,0,0,868,120.506q-9.073-2.464-18.241-4.628a220.947,220.947,0,0,1-23.156-6.633,76.766,76.766,0,0,1-11.792-5.476,48.523,48.523,0,0,1-10.3-7.516,42.644,42.644,0,0,1-10.143-15.889,62.984,62.984,0,0,1-3.751-24.951q1.09-21.542,16.3-35.876A64.487,64.487,0,0,1,822.062,9.053a77.891,77.891,0,0,1,24.606-7.728Q853,.424,860.931,0Z"
                            transform="translate(-41.606)" fill="#310f51" />
                    </g>
                    <path id="milestone"
                        d="M701.159,393.988h-.3l-15.321-39.519h-15.4v61.745h15.4V391.93h.377l8,24.286H708.1l8.076-24.286h.377v24.286h15.4V354.469H716.478ZM756.4,416.216V354.469h-15.4v61.745h15.4Zm24.456-15.149v-46.6h-15.4v61.745h41.131V401.065h-25.74Zm48.676-8.311h21.886V377.935H829.529v-8.311h27.094V354.469h-42.49v61.745h42.49V401.065H829.529v-8.311Zm32.753,4.524q0,9.551,6.113,14.939t16.679,5.392q10.339,0,16.641-4.939t6.3-14.572a23.092,23.092,0,0,0-1.585-9.015,13.821,13.821,0,0,0-4.075-5.681,23.087,23.087,0,0,0-5.552-3.159,34.5,34.5,0,0,0-6.113-1.853q-3.055-.616-5.547-1.276a11.656,11.656,0,0,1-4.075-1.853,3.85,3.85,0,0,1-1.585-3.252,4.972,4.972,0,0,1,1.358-3.91,6.284,6.284,0,0,1,4.231-1.194,5.554,5.554,0,0,1,4.189,1.523,5.735,5.735,0,0,1,1.471,4.158h16.07q0-9.138-5.736-14.324t-15.995-5.187q-9.736,0-15.736,5.146a17.246,17.246,0,0,0-6,13.789,19.845,19.845,0,0,0,1.585,8.311A13.044,13.044,0,0,0,869,385.59a23.42,23.42,0,0,0,5.547,2.964,51.761,51.761,0,0,0,6.113,1.894q3.056.742,5.548,1.523a10.169,10.169,0,0,1,4.075,2.3,5.558,5.558,0,0,1-.264,8.027,7.677,7.677,0,0,1-4.943,1.482q-3.623,0-5.132-1.853a7.119,7.119,0,0,1-1.51-4.652H862.282Zm94.407-42.81H910.361v15.149h15.466v46.6h15.4v-46.6h15.47Zm33.359-1.4a31.64,31.64,0,0,0-30.961,25.787,32.233,32.233,0,0,0,18.815,35.963,31.15,31.15,0,0,0,38.252-11.85,32.566,32.566,0,0,0-3.991-40.555,30.1,30.1,0,0,0-22.115-9.342Zm0,15.971a13.828,13.828,0,0,1,10.566,4.775,17.362,17.362,0,0,1,0,23.051,14.077,14.077,0,0,1-21.132,0,17.362,17.362,0,0,1,0-23.051,13.824,13.824,0,0,1,10.566-4.773Zm86.414-14.572h-15.4l.3,30.543h-.526l-16.831-30.543h-15.4v61.745h15.4l-.3-31.366h.526l16.831,31.366h15.4Zm24.446,38.281H1122.8V377.935h-21.887v-8.311h27.1V354.469h-42.494v61.745h42.494V401.065h-27.1v-8.311Z"
                        transform="translate(-295.566 -120.826)" fill="#e0da36" fill-rule="evenodd" />
                </g>
            </svg>
        </div>
        <div class="rightside">
            <div class="first">
                <div class="line">
                    we broke our&nbsp;<p class="line_trough">old</p>
                </div>
                <div class="line">
                    <p class="line_trough">website</p>&nbsp;to make
                </div>
                <div class="line">
                    something&nbsp;<b>more</b>
                </div>
                <div class="line">
                    <b>awesome</b>
                </div>
            </div>
            <div class="second">
                <svg xmlns="http://www.w3.org/2000/svg" width="529.55" height="419.575" viewBox="0 0 529.55 419.575">
                    <g id="Group_3" data-name="Group 3" transform="translate(-1185.88 -521.156)">
                        <path id="fresh"
                            d="M1303.21,444.242h-72.09v106.15h26.98V510.055h36.12V484.579H1258.1v-14.3h45.11Zm82.28,11.04a35.858,35.858,0,0,0-26.59-11.04h-45.11v106.15h26.99V521.519h12.69l12.31,28.873h30.29l-16.8-35.666q17.055-12.738,17.06-31.845Q1396.33,466.321,1385.49,455.282Zm-27.52,40.2h-17.19V470.284h17.19q4.23,0,7.14,4.105a13.846,13.846,0,0,1,0,16.984q-2.91,4.106-7.14,4.1h0Zm78.57,14.578h38.36V484.579h-38.36v-14.3h47.49V444.242h-74.47v106.15h74.47V524.35h-47.49v-14.3Zm57.41,7.784q0,16.42,10.71,25.689t29.24,9.27q18.12,0,29.16-8.492t11.05-25.051a39.055,39.055,0,0,0-2.78-15.5,23.745,23.745,0,0,0-7.14-9.766,40.579,40.579,0,0,0-9.73-5.449,61.528,61.528,0,0,0-10.71-3.185q-5.355-1.061-9.72-2.193a20.6,20.6,0,0,1-7.14-3.185,6.561,6.561,0,0,1-2.78-5.59q0-4.671,2.38-6.723c1.59-1.367,4.05-2.053,7.41-2.053q4.755,0,7.34,2.619a9.744,9.744,0,0,1,2.58,7.147h28.17q0-15.71-10.05-24.627t-28.04-8.916q-17.07,0-27.58,8.846t-10.52,23.707a33.579,33.579,0,0,0,2.78,14.3,22.477,22.477,0,0,0,7.14,9.058,41.3,41.3,0,0,0,9.72,5.1,92.508,92.508,0,0,0,10.72,3.255q5.355,1.274,9.72,2.619a17.9,17.9,0,0,1,7.14,3.963,9.428,9.428,0,0,1-.46,13.8,13.637,13.637,0,0,1-8.66,2.548q-6.36,0-9-3.185a12.108,12.108,0,0,1-2.64-8h-28.31Zm175.92-73.6h-26.98v40.337h-28.57V444.242h-26.99v106.15h26.99V510.055h28.57v40.337h26.98V444.242Z"
                            transform="translate(-45.24 79.322)" fill="#624c78" fill-rule="evenodd" />
                        <path id="look"
                            d="M1276.85,803.944V700.321h-34.9v137.31h93.25V803.944Zm137.57-106.735q-29.1,0-50.14,20.78t-21.04,50.987q0,30.209,21.04,50.988t50.14,20.779q29.085,0,50.13-20.779t21.04-50.988q0-30.209-21.04-50.987t-50.13-20.78Zm0,35.517q14.025,0,23.95,10.619a38.072,38.072,0,0,1,0,51.262q-9.93,10.62-23.95,10.619-14.04,0-23.96-10.619a38.072,38.072,0,0,1,0-51.262q9.93-10.615,23.96-10.619Zm154.33-35.517q-29.1,0-50.13,20.78-21.06,20.781-21.05,50.987t21.05,50.988q21.045,20.781,50.13,20.779t50.13-20.779q21.045-20.777,21.05-50.988t-21.05-50.987q-21.05-20.776-50.13-20.78Zm0,35.517q14.025,0,23.95,10.619a38.044,38.044,0,0,1,0,51.262q-9.915,10.62-23.95,10.619t-23.96-10.619a38.072,38.072,0,0,1,0-51.262q9.93-10.615,23.96-10.619Zm152.62,36.25,50.13-68.655h-43.46l-36.44,50.9-.52-.183V700.321h-34.9v137.31h34.9V807.386l8.28-10.816,28.68,41.061h43.46Z"
                            transform="translate(-56.07 99.988)" fill="#d9d331" fill-rule="evenodd" />
                        <path id="new"
                            d="M1481.36,559.452h-34.9l.68,67.922h-1.2l-38.15-67.922h-34.91V696.761h34.91l-.69-69.753h1.2l38.16,69.753h34.9V559.452Zm55.44,85.132h49.62V611.63H1536.8V593.139h61.42V559.452h-96.33V696.761h96.33V663.075H1536.8V644.584Zm213.36-85.132-17.11,76.161h-1.2l-16.94-76.161h-35.58l-17.12,76.161h-1.19l-16.94-76.161h-37.3l37.47,137.309h35.42l16.94-71.217h1.02l16.94,71.217h35.42l37.47-137.309h-37.3Z"
                            transform="translate(-72.03 86.552)" fill="#310f51" fill-rule="evenodd" />
                    </g>
                </svg>
            </div>
            <div class="third">
                Coming <b>soon</b> to <b>your</b> Browser
            </div>
        </div>
        <div class="side_section">
            <div class="email">
                <a href="mailto:Contact@Softcactus.ma">Contact@Softcactus.ma</a>
            </div>
            <div class="phone">
                <a href="tel:+212 648 927 820">+212 648 927 820</a>
            </div>
        </div>

    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('js/drawSVG.js') }}"></script>
    <script>
        $(document).ready(function() {
            
            // var mySVG = $('.svg').drawsvg();
            // mySVG.drawsvg('animate');




            // gsap.registerPlugin(DrawSVGPlugin);
            var tl = gsap.timeline();
            const svg = $('#svg');
            const svgPath = $('#svg path');

            //each path
            svgPath.each(function(i, e) {
                //get path length
                const length = e.getTotalLength();
                //add stroke-dasharray and stroke-dashoffset and stroke-width and stroke
                //remove fill attribute
                var fillColor = $(e).attr('fill');
                gsap.set(e, {
                    'stroke-dasharray': length,
                    'stroke-dashoffset': length,
                    'stroke-width': 3,
                    'stroke': fillColor,
                    'fill-opacity': 0
                })
                //add to timeline
                tl.to(e, {
                    duration: 3,
                    strokeDashoffset: 0,
                    ease: "power2.out"
                }, 0.5)
                //fill
                tl.to(e, {
                    duration: 1,
                    fillOpacity: 1,
                    ease: "power2.out"
                }, 3.5)

                tl.to(e, {
                    duration: 2,
                    fillOpacity: 0,
                    ease: "power2.out"
                }, 8.5)

                tl.to(e, {
                    duration: 3,
                    strokeDashoffset: length,
                    ease: "power2.out"
                }, 10.5)
                
            })

            //excute timeline animation in a loop
            tl.repeat(-1).repeatDelay(3).yoyo(true);



            var first = gsap.timeline();
            var second = gsap.timeline();
            var third = gsap.timeline();
            var side = gsap.timeline();
            
            first.from(".first", {
                duration: 1,
                y: -100,
                opacity: 0,
                delay: 1,
                ease: "power2.out"
            })
            second.from(".second", {
                duration: 2,
                y: -200,
                opacity: 0,
                delay: 1,
                ease: "power2.out"
            })
            third.from(".third", {
                duration: 3,
                y: -300,
                opacity: 0,
                delay: 1,
                ease: "power2.out"
            })
            side.from(".side_section", {
                duration: 4,
                x: -100,
                opacity: 0,
                ease: "power2.out"
            })
           

            
          



        })
    </script>

</body>

</html>
