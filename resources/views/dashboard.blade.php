<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >ABP School</title>
    @include('layouts.head')
</head>
<body style="height: 100vh;">
@include('layouts.side_bar')
    <div class="main-side col-10 container  gx-5"  style="overflow: scroll;" >
            <div class="row  d-flex align-items-center w-100 " style="flex-wrap: nowrap;height: 10%;">
                <h1 class="h1  text gx-5 mt-3 col-9 ms-1 fs-1" >Bienvenue</h1>
                <div class="d-flex w-25 darkswitch" style="justify-content: flex-end;" >
                     <div class=" col-2  d-flex rounded-pill justify-self-center  ps-1 pb-1 position-relative" style="border: #00B3FF solid 3px;width: 60px;z-index: -5;">
                    <div class="sun me-2 " style="margin-left: 1px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
                            <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                          </svg>
                    </div>
                    <div class="moon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                          </svg>

                    </div>
                    <div class="bg rounded-circle bg-primary position-absolute  " style="z-index: -10; top: 7%; width: 43%; height: 85%;"></div>
                </div>
                </div>

            </div>
            <div class="row  gy-10 " style="height: 90%;">

                <div class="left-side  col-md h-100  d-flex align-items-center" >
                <div class=" w-100  container border background" style=" height: 90%;border-radius: 20px;">
                    <div class="d-none row d-flex  gy-2 mt-4" >
                        <div class="col d-flex flex-column align-items-center">
                            <svg class="icon" width="116" height="112" viewBox="0 0 116 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7425 32.6657C20.7425 19.599 31.0501 9.33234 44.1689 9.33234C57.2876 9.33234 67.5952 19.599 67.5952 32.6657C67.5952 45.7323 57.2876 55.999 44.1689 55.999C31.0501 55.999 20.7425 45.7323 20.7425 32.6657ZM86.3348 88.6654V97.9988C86.3348 100.799 84.4607 102.665 81.6496 102.665C78.8384 102.665 76.9643 100.799 76.9643 97.9988V88.6654C76.9643 80.7321 70.8735 74.6654 62.9085 74.6654H25.4263C17.4614 74.6654 11.3705 80.7321 11.3705 88.6654V97.9988C11.3705 100.799 9.49643 102.665 6.68527 102.665C3.87411 102.665 2 100.799 2 97.9988V88.6654C2 75.5988 12.3076 65.3321 25.4263 65.3321H62.9085C76.0273 65.3321 86.3348 75.5988 86.3348 88.6654ZM44.1665 46.6664C36.2015 46.6664 30.1107 40.5998 30.1107 32.6664C30.1107 24.7331 36.2015 18.6664 44.1665 18.6664C52.1314 18.6664 58.2223 24.7331 58.2223 32.6664C58.2223 40.5998 52.1314 46.6664 44.1665 46.6664ZM96.6431 66.2662C94.3005 65.7995 91.4893 67.1995 91.0208 69.5329C90.5523 71.8662 91.9578 74.6662 94.3005 75.1329C100.391 76.5329 104.608 82.1329 104.608 88.6662V97.9995C104.608 100.8 106.482 102.666 109.293 102.666C112.104 102.666 113.979 100.8 113.979 97.9995V88.6662C114.447 77.9329 107.419 68.5995 96.6431 66.2662ZM72.2791 13.5322C73.2162 10.7322 75.5588 9.33223 77.9015 10.2656C90.5517 13.0656 98.0481 26.1322 94.7684 39.1989C92.8943 47.5989 86.3349 53.6656 77.9015 55.9989H76.9644C74.6218 55.9989 72.7477 54.5989 72.2791 52.2656C71.3421 49.9322 73.2162 47.1322 75.5588 46.6656C80.7126 45.2656 84.4608 41.5322 85.8664 36.3989C87.7405 28.4656 83.0552 20.9989 75.5588 19.1322C73.2162 18.6656 71.8106 15.8656 72.2791 13.5322Z" />
                                <path d="M91.0208 69.5329L89.2733 69.182L89.2733 69.182L91.0208 69.5329ZM96.6431 66.2662L97.0203 64.5242L97.0058 64.5211L96.9913 64.5182L96.6431 66.2662ZM94.3005 75.1329L94.6997 73.3958L94.6743 73.3899L94.6487 73.3848L94.3005 75.1329ZM113.979 88.6662L112.198 88.5885L112.196 88.6273V88.6662H113.979ZM77.9015 10.2656L77.2418 11.9213L77.3756 11.9747L77.5163 12.0058L77.9015 10.2656ZM72.2791 13.5322L70.5889 12.9666L70.5536 13.0722L70.5317 13.1813L72.2791 13.5322ZM94.7684 39.1989L93.0397 38.765L93.034 38.7878L93.0288 38.8108L94.7684 39.1989ZM77.9015 55.9989V57.7813H78.1435L78.3767 57.7167L77.9015 55.9989ZM72.2791 52.2656L74.0266 51.9147L73.9943 51.7537L73.9331 51.6013L72.2791 52.2656ZM75.5588 46.6656L75.907 48.4136L75.967 48.4016L76.0261 48.3856L75.5588 46.6656ZM85.8664 36.3989L87.5855 36.8696L87.5938 36.8393L87.601 36.8087L85.8664 36.3989ZM75.5588 19.1322L75.9895 17.4027L75.9485 17.3925L75.907 17.3842L75.5588 19.1322ZM44.1689 7.54998C30.0724 7.54998 18.9602 18.608 18.9602 32.6657H22.5249C22.5249 20.5901 32.0278 11.1147 44.1689 11.1147V7.54998ZM69.3776 32.6657C69.3776 18.608 58.2653 7.54998 44.1689 7.54998V11.1147C56.31 11.1147 65.8129 20.5901 65.8129 32.6657H69.3776ZM44.1689 57.7814C58.2653 57.7814 69.3776 46.7234 69.3776 32.6657H65.8129C65.8129 44.7413 56.31 54.2166 44.1689 54.2166V57.7814ZM18.9602 32.6657C18.9602 46.7234 30.0724 57.7814 44.1689 57.7814V54.2166C32.0278 54.2166 22.5249 44.7413 22.5249 32.6657H18.9602ZM88.1172 97.9988V88.6654H84.5525V97.9988H88.1172ZM81.6496 104.448C83.4581 104.448 85.1046 103.84 86.3042 102.645C87.5044 101.449 88.1172 99.8059 88.1172 97.9988H84.5525C84.5525 98.9916 84.2282 99.6814 83.7886 100.119C83.3483 100.558 82.6522 100.883 81.6496 100.883V104.448ZM75.1819 97.9988C75.1819 99.8059 75.7947 101.449 76.9949 102.645C78.1945 103.84 79.8411 104.448 81.6496 104.448V100.883C80.6469 100.883 79.9508 100.558 79.5106 100.119C79.0709 99.6814 78.7467 98.9916 78.7467 97.9988H75.1819ZM75.1819 88.6654V97.9988H78.7467V88.6654H75.1819ZM62.9085 76.4478C69.8958 76.4478 75.1819 81.7231 75.1819 88.6654H78.7467C78.7467 79.741 71.8511 72.8831 62.9085 72.8831V76.4478ZM25.4263 76.4478H62.9085V72.8831H25.4263V76.4478ZM13.1529 88.6654C13.1529 81.7231 18.4391 76.4478 25.4263 76.4478V72.8831C16.4837 72.8831 9.58818 79.741 9.58818 88.6654H13.1529ZM13.1529 97.9988V88.6654H9.58818V97.9988H13.1529ZM6.68527 104.448C8.49376 104.448 10.1403 103.84 11.3399 102.645C12.5401 101.449 13.1529 99.8059 13.1529 97.9988H9.58818C9.58818 98.9916 9.26389 99.6814 8.82428 100.119C8.38404 100.558 7.68794 100.883 6.68527 100.883V104.448ZM0.217642 97.9988C0.217642 99.8059 0.830406 101.449 2.03064 102.645C3.23025 103.84 4.87678 104.448 6.68527 104.448V100.883C5.6826 100.883 4.9865 100.558 4.54626 100.119C4.10665 99.6814 3.78236 98.9916 3.78236 97.9988H0.217642ZM0.217642 88.6654V97.9988H3.78236V88.6654H0.217642ZM25.4263 63.5497C11.3299 63.5497 0.217642 74.6077 0.217642 88.6654H3.78236C3.78236 76.5898 13.2853 67.1144 25.4263 67.1144V63.5497ZM62.9085 63.5497H25.4263V67.1144H62.9085V63.5497ZM88.1172 88.6654C88.1172 74.6077 77.0049 63.5497 62.9085 63.5497V67.1144C75.0496 67.1144 84.5525 76.5898 84.5525 88.6654H88.1172ZM28.3283 32.6664C28.3283 41.5908 35.2238 48.4488 44.1665 48.4488V44.8841C37.1792 44.8841 31.893 39.6087 31.893 32.6664H28.3283ZM44.1665 16.8841C35.2238 16.8841 28.3283 23.7421 28.3283 32.6664H31.893C31.893 25.7242 37.1792 20.4488 44.1665 20.4488V16.8841ZM60.0046 32.6664C60.0046 23.7421 53.1091 16.8841 44.1665 16.8841V20.4488C51.1538 20.4488 56.4399 25.7242 56.4399 32.6664H60.0046ZM44.1665 48.4488C53.1091 48.4488 60.0046 41.5908 60.0046 32.6664H56.4399C56.4399 39.6087 51.1538 44.8841 44.1665 44.8841V48.4488ZM92.7683 69.8838C92.8756 69.349 93.2782 68.8041 93.9921 68.409C94.7093 68.0122 95.5711 67.87 96.2949 68.0142L96.9913 64.5182C95.3725 64.1957 93.6574 64.5202 92.2662 65.29C90.8717 66.0616 89.6345 67.3834 89.2733 69.182L92.7683 69.8838ZM94.6487 73.3848C94.105 73.2765 93.5578 72.8724 93.163 72.1646C92.766 71.4527 92.6246 70.5991 92.7683 69.8837L89.2733 69.182C88.9484 70.8 89.2756 72.513 90.0498 73.9011C90.8264 75.2934 92.1533 76.5225 93.9523 76.8809L94.6487 73.3848ZM106.39 88.6662C106.39 81.3736 101.668 74.9974 94.6997 73.3958L93.9012 76.8699C99.1152 78.0684 102.826 82.8921 102.826 88.6662H106.39ZM106.39 97.9995V88.6662H102.826V97.9995H106.39ZM109.293 100.884C108.291 100.884 107.595 100.559 107.154 100.12C106.715 99.6822 106.39 98.9924 106.39 97.9995H102.826C102.826 99.8067 103.438 101.45 104.639 102.646C105.838 103.841 107.485 104.449 109.293 104.449V100.884ZM112.196 97.9995C112.196 98.9924 111.872 99.6822 111.432 100.12C110.992 100.559 110.296 100.884 109.293 100.884V104.449C111.102 104.449 112.748 103.841 113.948 102.646C115.148 101.45 115.761 99.8067 115.761 97.9995H112.196ZM112.196 88.6662V97.9995H115.761V88.6662H112.196ZM96.2659 68.0082C106.187 70.1563 112.629 78.7157 112.198 88.5885L115.759 88.7439C116.265 77.15 108.652 67.0427 97.0203 64.5242L96.2659 68.0082ZM78.5611 8.60978C76.8742 7.9377 75.1274 8.10259 73.6622 8.96105C72.2277 9.80152 71.1675 11.2378 70.5889 12.9666L73.9693 14.0979C74.3278 13.0267 74.9075 12.3629 75.4642 12.0367C75.9903 11.7285 76.586 11.6601 77.2418 11.9213L78.5611 8.60978ZM96.4972 39.6328C99.9978 25.6858 92.0086 11.5625 78.2866 8.52532L77.5163 12.0058C89.0947 14.5686 96.0984 26.5787 93.0397 38.765L96.4972 39.6328ZM78.3767 57.7167C87.3422 55.2362 94.4687 48.7275 96.508 39.587L93.0288 38.8108C91.3199 46.4703 85.3276 52.0949 77.4262 54.2811L78.3767 57.7167ZM76.9644 57.7813H77.9015V54.2165H76.9644V57.7813ZM70.5317 52.6164C71.1806 55.8485 73.842 57.7813 76.9644 57.7813V54.2165C75.4015 54.2165 74.3147 53.3493 74.0266 51.9147L70.5317 52.6164ZM75.2106 44.9175C73.4771 45.2629 72.0307 46.4304 71.1699 47.8335C70.3031 49.2462 69.8996 51.1232 70.6252 52.9298L73.9331 51.6013C73.7216 51.0746 73.7866 50.385 74.2083 49.6977C74.6359 49.0007 75.2979 48.5349 75.907 48.4136L75.2106 44.9175ZM84.1473 35.9282C82.9091 40.4502 79.6389 43.7103 75.0916 44.9455L76.0261 48.3856C81.7863 46.8208 86.0125 42.6142 87.5855 36.8696L84.1473 35.9282ZM75.1281 20.8618C81.6696 22.4906 85.7834 28.9977 84.1318 35.9891L87.601 36.8087C89.6976 27.9334 84.4409 19.5071 75.9895 17.4027L75.1281 20.8618ZM70.5317 13.1813C70.2068 14.7993 70.534 16.5124 71.3082 17.9004C72.0848 19.2927 73.4116 20.5219 75.2106 20.8802L75.907 17.3842C75.3634 17.2759 74.8161 16.8717 74.4214 16.164C74.0243 15.4521 73.883 14.5985 74.0266 13.8831L70.5317 13.1813Z" />
                                <mask id="mask0_169_21828" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="2" y="9" width="113" height="94">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7425 32.6657C20.7425 19.599 31.0501 9.33234 44.1689 9.33234C57.2876 9.33234 67.5952 19.599 67.5952 32.6657C67.5952 45.7323 57.2876 55.999 44.1689 55.999C31.0501 55.999 20.7425 45.7323 20.7425 32.6657ZM86.3348 88.6654V97.9988C86.3348 100.799 84.4607 102.665 81.6496 102.665C78.8384 102.665 76.9643 100.799 76.9643 97.9988V88.6654C76.9643 80.7321 70.8735 74.6654 62.9085 74.6654H25.4263C17.4614 74.6654 11.3705 80.7321 11.3705 88.6654V97.9988C11.3705 100.799 9.49643 102.665 6.68527 102.665C3.87411 102.665 2 100.799 2 97.9988V88.6654C2 75.5988 12.3076 65.3321 25.4263 65.3321H62.9085C76.0273 65.3321 86.3348 75.5988 86.3348 88.6654ZM44.1665 46.6664C36.2015 46.6664 30.1107 40.5998 30.1107 32.6664C30.1107 24.7331 36.2015 18.6664 44.1665 18.6664C52.1314 18.6664 58.2223 24.7331 58.2223 32.6664C58.2223 40.5998 52.1314 46.6664 44.1665 46.6664ZM96.6431 66.2662C94.3005 65.7995 91.4893 67.1995 91.0208 69.5329C90.5523 71.8662 91.9578 74.6662 94.3005 75.1329C100.391 76.5329 104.608 82.1329 104.608 88.6662V97.9995C104.608 100.8 106.482 102.666 109.293 102.666C112.104 102.666 113.979 100.8 113.979 97.9995V88.6662C114.447 77.9329 107.419 68.5995 96.6431 66.2662ZM72.2791 13.5322C73.2162 10.7322 75.5588 9.33223 77.9015 10.2656C90.5517 13.0656 98.0481 26.1322 94.7684 39.1989C92.8943 47.5989 86.3349 53.6656 77.9015 55.9989H76.9644C74.6218 55.9989 72.7477 54.5989 72.2791 52.2656C71.3421 49.9322 73.2162 47.1322 75.5588 46.6656C80.7126 45.2656 84.4608 41.5322 85.8664 36.3989C87.7405 28.4656 83.0552 20.9989 75.5588 19.1322C73.2162 18.6656 71.8106 15.8656 72.2791 13.5322Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask0_169_21828)">
                                </g>
                                <defs>
                                <linearGradient id="paint0_linear_169_21828" x1="111.16" y1="144.307" x2="-5.93507" y2="143.152" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#003348"/>
                                <stop offset="1" stop-color="#1081B3"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear_169_21828" x1="111.16" y1="144.307" x2="-5.93507" y2="143.152" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#003348"/>
                                <stop offset="1" stop-color="#1081B3"/>
                                </linearGradient>
                                </defs>
                                </svg>
                            <p class="fs-2 mb-0 ">97 etudiants</p>
                            <p class="">registrées a l’ecole</p>
                        </div>
                        <div class="col d-flex flex-column align-items-center">
                            <svg width="107" class="icon" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M89.1668 35.5929C89.1668 16.017 73.1168 0.000366211 53.5002 0.000366211C33.8835 0.000366211 17.8335 16.017 17.8335 35.5929C17.8335 47.1604 23.1835 57.3933 31.6543 63.622L26.7502 101.884C26.3043 103.664 27.196 105.443 28.5335 106.333C29.871 107.223 31.6543 107.223 33.4377 106.333L53.5002 94.3205L73.5627 106.333C74.0085 106.778 74.9002 106.778 75.7918 106.778C76.6835 106.778 77.5752 106.333 78.021 105.888C79.3585 104.998 80.2502 103.219 79.8043 101.439L74.9002 63.622C83.8168 57.3933 89.1668 47.1604 89.1668 35.5929ZM26.7492 35.5934C26.7492 20.9115 38.7867 8.89899 53.4992 8.89899C68.2117 8.89899 80.2492 20.9115 80.2492 35.5934C80.2492 50.2753 68.2117 62.2878 53.4992 62.2878C38.7867 62.2878 26.7492 50.2753 26.7492 35.5934ZM55.7278 85.4224L69.9945 93.8756L66.8736 68.5159C62.8611 70.2955 58.4028 71.1854 53.4986 71.1854C48.5945 71.1854 44.1361 70.2955 40.1236 68.5159L37.0028 93.8756L51.2695 85.4224C52.607 84.5326 54.3903 84.5326 55.7278 85.4224Z" />
                                <mask id="mask0_169_21842" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="17" y="0" width="73" height="108">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M89.1668 35.5929C89.1668 16.017 73.1168 0.000366211 53.5002 0.000366211C33.8835 0.000366211 17.8335 16.017 17.8335 35.5929C17.8335 47.1604 23.1835 57.3933 31.6543 63.622L26.7502 101.884C26.3043 103.664 27.196 105.443 28.5335 106.333C29.871 107.223 31.6543 107.223 33.4377 106.333L53.5002 94.3205L73.5627 106.333C74.0085 106.778 74.9002 106.778 75.7918 106.778C76.6835 106.778 77.5752 106.333 78.021 105.888C79.3585 104.998 80.2502 103.219 79.8043 101.439L74.9002 63.622C83.8168 57.3933 89.1668 47.1604 89.1668 35.5929ZM26.7492 35.5934C26.7492 20.9115 38.7867 8.89899 53.4992 8.89899C68.2117 8.89899 80.2492 20.9115 80.2492 35.5934C80.2492 50.2753 68.2117 62.2878 53.4992 62.2878C38.7867 62.2878 26.7492 50.2753 26.7492 35.5934ZM55.7278 85.4224L69.9945 93.8756L66.8736 68.5159C62.8611 70.2955 58.4028 71.1854 53.4986 71.1854C48.5945 71.1854 44.1361 70.2955 40.1236 68.5159L37.0028 93.8756L51.2695 85.4224C52.607 84.5326 54.3903 84.5326 55.7278 85.4224Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask0_169_21842)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 -62.4159H169.417V107.001H0V-62.4159Z" fill="url(#paint1_linear_169_21842)"/>
                                </g>
                                <defs>


                                </defs>
                                </svg>

                            <p class="fs-2 mb-0">10 formations</p>
                            <p class=" ">en cours de déroulement</p>
                        </div>
                        <div class="col d-flex flex-column align-items-center">
                            <svg width="95" class="icon" height="105" viewBox="0 0 95 105" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M89.8357 38.2687C91.7173 38.2687 93.1285 39.2104 94.0694 41.0937C95.0102 42.5062 94.5398 44.3896 93.599 45.8021L46.558 102.302C45.6172 103.715 44.206 104.185 42.7948 104.185C42.3244 104.185 41.3835 104.185 40.9131 103.715C39.0315 103.244 37.6203 100.89 38.0907 99.0062L42.3244 66.5187H5.16204C3.2804 66.5187 1.86917 65.577 0.928353 64.1646C-0.012465 62.2812 0.457944 60.3979 1.39876 58.9854L48.4397 2.48538C49.8509 0.602051 52.2029 0.131217 54.0846 1.07288C55.9662 1.54372 57.3774 3.89788 56.907 5.78122L52.6734 38.2687H89.8357ZM52.2037 62.2805L49.3813 83.9389L79.4874 47.6847H47.0292C46.0884 47.6847 44.6772 47.2139 43.7363 46.2722C43.2659 45.3305 42.7955 43.918 42.7955 42.5055L45.1476 20.8472L15.0414 57.1014H47.4996C48.9109 57.1014 50.3221 57.5722 51.2629 58.5139C51.7333 59.4555 52.2037 60.868 52.2037 62.2805Z" />
                                <mask id="mask0_169_21953" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="95" height="105">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M89.8357 38.2687C91.7173 38.2687 93.1285 39.2104 94.0694 41.0937C95.0102 42.5062 94.5398 44.3896 93.599 45.8021L46.558 102.302C45.6172 103.715 44.206 104.185 42.7948 104.185C42.3244 104.185 41.3835 104.185 40.9131 103.715C39.0315 103.244 37.6203 100.89 38.0907 99.0062L42.3244 66.5187H5.16204C3.2804 66.5187 1.86917 65.577 0.928353 64.1646C-0.012465 62.2812 0.457944 60.3979 1.39876 58.9854L48.4397 2.48538C49.8509 0.602051 52.2029 0.131217 54.0846 1.07288C55.9662 1.54372 57.3774 3.89788 56.907 5.78122L52.6734 38.2687H89.8357ZM52.2037 62.2805L49.3813 83.9389L79.4874 47.6847H47.0292C46.0884 47.6847 44.6772 47.2139 43.7363 46.2722C43.2659 45.3305 42.7955 43.918 42.7955 42.5055L45.1476 20.8472L15.0414 57.1014H47.4996C48.9109 57.1014 50.3221 57.5722 51.2629 58.5139C51.7333 59.4555 52.2037 60.868 52.2037 62.2805Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask0_169_21953)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M-9 -4.10693H104V108.893H-9V-4.10693Z" />
                                </g>
                                <defs>
                                <linearGradient id="paint0_linear_169_21953" x1="92.1939" y1="150.399" x2="-6.26011" y2="149.663" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#003348"/>
                                <stop offset="1" stop-color="#1081B3"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear_169_21953" x1="101.134" y1="159.308" x2="-17.0094" y2="158.337" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#003348"/>
                                <stop offset="1" stop-color="#1081B3"/>
                                </linearGradient>
                                </defs>
                                </svg>

                            <p class="fs-2 mb-0">2 promotions</p>
                            <p class=" ">en cours d’activation</p>
                        </div>
                        <div class="col d-flex flex-column align-items-center">
                            <svg width="105" class="icon" height="106" viewBox="0 0 105 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M56.874 4.55438C56.874 2.13814 54.9153 0.179382 52.499 0.179382C50.0828 0.179382 48.124 2.13814 48.124 4.55438V17.6794H41.5615C36.3401 17.6794 31.3325 19.7536 27.6404 23.4457C23.9482 27.1378 21.874 32.1454 21.874 37.3669C21.874 42.5883 23.9482 47.5959 27.6404 51.2881C31.3325 54.9802 36.3401 57.0544 41.5615 57.0544H48.124V78.9294H26.249C23.8328 78.9294 21.874 80.8881 21.874 83.3044C21.874 85.7206 23.8328 87.6794 26.249 87.6794H48.124V100.804C48.124 103.221 50.0828 105.179 52.499 105.179C54.9153 105.179 56.874 103.221 56.874 100.804V87.6794H63.4365C68.658 87.6794 73.6656 85.6052 77.3577 81.9131C81.0498 78.2209 83.124 73.2133 83.124 67.9919C83.124 62.7704 81.0498 57.7628 77.3577 54.0707C73.6656 50.3786 68.658 48.3044 63.4365 48.3044H56.874V26.4294H74.374C76.7903 26.4294 78.749 24.4706 78.749 22.0544C78.749 19.6381 76.7903 17.6794 74.374 17.6794H56.874V4.55438ZM48.124 26.4294H41.5615C38.6607 26.4294 35.8787 27.5817 33.8275 29.6329C31.7764 31.6841 30.624 34.4661 30.624 37.3669C30.624 40.2677 31.7764 43.0497 33.8275 45.1009C35.8787 47.152 38.6607 48.3044 41.5615 48.3044H48.124V26.4294ZM56.874 57.0544V78.9294H63.4365C66.3373 78.9294 69.1193 77.7771 71.1705 75.7259C73.2217 73.6747 74.374 70.8927 74.374 67.9919C74.374 65.0911 73.2217 62.3091 71.1705 60.2579C69.1193 58.2067 66.3373 57.0544 63.4365 57.0544H56.874Z" />
                                <defs>
                                <linearGradient id="paint0_linear_169_21934" x1="81.5706" y1="152.025" x2="17.5298" y2="151.718" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#003348"/>
                                <stop offset="1" stop-color="#1081B3"/>
                                </linearGradient>
                                </defs>
                                </svg>

                            <p class="fs-2 mb-0">20000da</p>
                            <p class=" ">générée le dernier mois</p>
                        </div>
                    </div>



                    <div class="row gx-1 gy-1 "  >
                        <div class="vos-cours  "><h4 class="fw-light ps-3 pt-3">vos cours d'aujourd'hui </h4> </div>
                        @foreach($today_courses as $today_course)
                        <div class="col-4   text-light rounded cours-section" >
                         <a href="{{route('page.math')}}" class="text-light" >
                            <div class="p-1  cours-card rounded m-3 ms-4 me-4 ms-4 me-4 p-3" style="min-width: 100px;">
                            <h4>{{ $today_course->name }}</h4>
                            <p>{{ $today_course->date_and_time }} </p>
                        </div>
                        </a>
                        </div>
{{--                        <div class="col-4   text-light rounded cours-section" >--}}
{{--                            <a href="{{route('page.education')}}" class="text-light" >--}}
{{--                               <div class="p-1  cours-card rounded m-3 ms-4 me-4 ms-4 me-4 p-3" style="min-width: 100px;">--}}
{{--                                  --}}
{{--                                       <tr>--}}
{{--                                           <td>{{ $today_course->name }}</td>--}}
{{--                                           <td>{{ $today_course->date }}</td>--}}
{{--                                           <!-- other course details -->--}}
{{--                                       </tr>--}}
{{--
{{--                           </div>--}}
{{--                           </a>--}}
{{--                           </div>--}}

                            @endforeach


                    </div>
                    </div>
                </div>
            </div>

            </div>

            </div>

            </div>
        </div>




<div class="background" style="overflow: hidden; width: 100%; height: 100%; top: 0%; right: 0%; position: absolute;z-index: -10; ">

    <div class="grad " style="
        position: absolute;
        width: 100%;
        bottom: 0;
        height: 100%;
        z-index: -5;
        opacity: 80%;
        background-image: linear-gradient(0deg, #0c88bc, rgba(0,179,255,0) 50%);">
        </div>

        <div class="glass " style="
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: -7;
        backdrop-filter: blur(20px) ;"
        ></div>



    <div class="groupe-circles" style="height: 100%; overflow: hidden; width: 100vw; z-index: -10 ;position: fixed; top: 0%; left: 0%;">
        <div class="circle" style="
        position: relative;
        z-index: -8;
            border-radius: 200%;
            width: 40%;
            aspect-ratio: 1/0.8;
            opacity: 100%;
            background-image: radial-gradient( rgba(1, 187, 249, 0.866),rgba(1, 187, 249, 0)  );
            top: 20%;
            right: -10%;

            "> </div>
            <div class="circle" style="
             z-index: -8;
            position: absolute;
                border-radius: 200%;
                width: 35%;
                aspect-ratio: 1/1;
                opacity: 100%;
                background-image: radial-gradient( rgba(1, 187, 249, 0.866),rgba(1, 187, 249, 0)  );
                top: -10%;
                left: 60%;

                "> </div>
            <div class="circle" style="
             z-index: -30;
            position: absolute;
                border-radius: 200%;
                width: 40%;
                aspect-ratio: 1/0.9;
                opacity: 100%;
                background-image: radial-gradient( rgba(1, 187, 249, 0.866),rgba(1, 187, 249, 0)  );
                top: 60%;
                left: 50%;
                rotate: 45deg;
                "> </div>
    </div>
      </div>
@include('layouts.script')
</body>
</html>
