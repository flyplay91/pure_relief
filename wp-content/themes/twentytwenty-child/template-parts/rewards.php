<?php
/**
 * Template Name: Rewards Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main id="main" class="rewards-page">
    <section class="section hero pos-rel anim fade up slow">
        <div class="w-100 fs-0 bg-snow">
            <picture>
                <source media="(min-width:1025px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-img@2x.jpg">
                <source media="(max-width:1024px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-img-m.jpg">
                <img class="w-100" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-img@2x.jpg" />
            </picture>
        </div>
        <div class="pos-abs w-100 h-100 pos-t md:w-100 md:h-1/2 md:pos-t-1/2">
            <div class="pos-rel w-1/2 v-center text-center md:w-100">
                <h2 class="section-title text-upper">
                Relief<br><span class="section-title-em">REWARDS</span></h1>
                <p class="section-subtitle"><i>As a rewards member, you’ll get closer to earning exclusive rewards<br>every time you shop.</i></p>
                <div class="section-action">
                    <a href="/my-account/" class="btn anim fade left" role="button">Sign Up</a>
                    <a href="/my-account/" class="btn anim fade right" role="button">Sign In</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section balance">
        <div class="w-1/2 mx-auto text-center md:w-100">
            <h2 class="section-title text-upper">
            Hi,<br>You Have <span class="point-balance">0</span> Points</h1>
            <div class="section-action">
                <a href="/cart" class="btn anim fade left slow" role="button">Reddem Now</a>
                <a href="#" class="btn anim fade left slow" role="button">Rewards History</a>
            </div>
        </div>
    </section>
    <section class="section hiw text-center">
        <h2 class="section-title text-upper anim fade up">
        How It Works</h1>
        <div class="container f f-a-i-center f-wrap">
            <div class="w-1/4 md:w-100 md:order-1">
                <div class="hiw-widget join anim fade left">
                    <h3 class="hiw-widget-title">Join</h3>
                    <p class="m-0">Create an account and<br>start earning.</p>
                </div>
            </div>
            <div class="w-1/2 md:w-100 md:order-0">
                <img class="w-100 anim fade center" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-hiw@2x.jpg" />
            </div>
            <div class="w-1/4 f f-col f-j-c-around md:w-100 md:order-2">
                <div class="hiw-widget earn anim fade right">
                    <h3 class="hiw-widget-title">Earn Points</h3>
                    <p class="m-0">Earn points every time<br>you shop.</p>
                </div>
                <div class="hiw-widget redeem anim fade right">
                    <h3 class="hiw-widget-title">Redeem Points</h3>
                    <p class="m-0">Redeem points<br>for exclusive discounts.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section point text-center">
        <h2 class="section-title text-upper anim fade down">
        Ways To Earn Points</h1>
        <div class="f f-wrap bg-surface">
            <div class="w-1/4 md:w-1/2">
                <div class="point-card border-br anim fade left">
                    <div class="point-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="47">
                            <path fill="#0A0A0A" fill-rule="evenodd" d="M50.645 47c-5.158 0-9.355-4.143-9.355-9.234 0-5.093 4.197-9.235 9.355-9.235s9.354 4.142 9.354 9.235c0 5.091-4.196 9.234-9.354 9.234zm0-16.559c-4.092 0-7.42 3.286-7.42 7.325 0 4.038 3.328 7.324 7.42 7.324 4.091 0 7.419-3.286 7.419-7.324 0-4.039-3.328-7.325-7.419-7.325zm3.226 8.28h-2.259v2.229a.961.961 0 0 1-.967.955.962.962 0 0 1-.968-.955v-2.229h-2.258a.961.961 0 0 1-.967-.955c0-.528.433-.956.967-.956h2.258v-2.229c0-.528.433-.955.968-.955a.96.96 0 0 1 .967.955v2.229h2.259c.534 0 .968.428.968.956a.962.962 0 0 1-.968.955zm-6.182-11.744a.97.97 0 0 1-.766-.372c-2.527-3.228-6.344-5.079-10.472-5.079-2.651 0-5.207.771-7.394 2.229a.977.977 0 0 1-1.344-.257.947.947 0 0 1 .261-1.326 15.221 15.221 0 0 1 8.477-2.557c4.732 0 9.107 2.122 12.003 5.822a.947.947 0 0 1-.174 1.34.965.965 0 0 1-.591.2zM36.451 15.921c-4.446 0-8.064-3.571-8.064-7.96 0-4.39 3.618-7.961 8.064-7.961 4.447 0 8.065 3.571 8.065 7.961 0 4.389-3.618 7.96-8.065 7.96zm0-14.01c-3.379 0-6.129 2.714-6.129 6.05s2.75 6.05 6.129 6.05c3.38 0 6.129-2.714 6.129-6.05s-2.749-6.05-6.129-6.05zm-7.096 33.626a.962.962 0 0 1-.968-.956c0-7.198-5.933-13.055-13.226-13.055-7.293 0-13.226 5.857-13.226 13.055a.962.962 0 0 1-.968.956.962.962 0 0 1-.967-.956c0-8.252 6.801-14.966 15.161-14.966s15.161 6.714 15.161 14.966a.962.962 0 0 1-.967.956zM15.161 15.921c-4.447 0-8.065-3.571-8.065-7.96C7.096 3.571 10.714 0 15.161 0c4.446 0 8.064 3.571 8.064 7.961 0 4.389-3.618 7.96-8.064 7.96zm0-14.01c-3.38 0-6.13 2.714-6.13 6.05s2.75 6.05 6.13 6.05 6.128-2.714 6.128-6.05-2.748-6.05-6.128-6.05z"></path>
                        </svg>
                    </div>
                    <h4 class="point-card-title">50 points</h4>
                    <p class="point-card-subtitle">Create an Account</p>
                </div>
            </div>
            <div class="w-1/4 md:w-1/2">
                <div class="point-card border-br md:border-b anim fade up">
                    <div class="point-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="47">
                            <path fill="#0A0A0A" fill-rule="evenodd" d="M38.095 27.371h-1.668c.269-14.698.993-19.339-14.282-19.339-3.235.001-5.59.145-7.418 1.46-4.707 3.387-3.655 12.947-3.524 20.981H9.534C9.339 19.237 8.092 7.285 18.621 6.574L15.84.918l.556-.547c1.788-.74 14.731-.269 15.393.547l-2.782 5.656c9.696.561 9.264 10.413 9.088 20.797zM18.065 1.83l2.411 4.561h6.863l2.225-4.379V1.83H18.065zm-.556 8.028c.848.306.8.503.927 1.459l-1.483.365-.557-1.095 1.113-.729zm-3.153 9.851l-1.669-.183c-.138-3.617.219-6.358 2.225-7.844l1.114.912c-1.399 1.87-1.734 3.569-1.67 7.115zm8.717-6.203h1.483v1.46h3.153v1.641c-2.147-.081-7.969-.868-7.047 2.008.629 1.96 3.661.499 5.75 1.094 1.314.373 1.561 1.683 2.224 2.736-.18 1.444-.634 2.039-1.297 2.919l-2.783.548v1.459h-1.483v-1.459H19.92v-1.643c2.42.166 7.934.758 6.862-2.007-.819-1.565-4.436-1.064-6.306-1.459-1.939-2.323-1.864-5.938 2.597-5.837v-1.46zm7.789 15.142c5.131-.087 6.751 1.647 9.83 2.737 2.085.737 5.152-.413 6.862.365.05 4.202 1.191 11.775-.371 15.142H27.339c-3.139 0-7.088.403-9.645-.365-2.967-1.581-5.935-3.162-8.901-4.744-2.481-1.325-7.092-2.635-8.347-5.108-1.542-3.042 1.162-6.923 4.451-6.385l11.129 5.291c-.671-7.633 4.994-3.39 10.2-5.108 1.195-.395 3.173-1.199 4.636-1.825zm-.741 8.21v1.459H17.88c-4.757-1.331-8.509-6.096-14.095-6.385-.88.415-1.441.756-1.854 1.642v2.372c1.448 1.827 4.023 2.444 6.119 3.648 3.235 1.858 7.005 4.834 10.943 5.656h20.586c.047-2.233.51-11.983-.371-12.953-3.511-3.683-9.066-1.319-12.796-.182-3.116.948-6.373-.509-8.532.911-.221.687-.53 1.406-.186 2.19l.927 1.277c3.141.694 7.758.382 11.5.365zm11.127-4.014V45.25h4.636V32.844h-4.636zm1.483 8.575h1.67v1.642l-1.67-.183v-1.459z"></path>
                        </svg>
                    </div>
                    <h4 class="point-card-title">1 point</h4>
                    <p class="point-card-subtitle">Per $1 Spent</p>
                </div>
            </div>
            <div class="w-1/4 md:w-1/2">
                <div class="point-card border-br md:border-br anim fade up">
                    <div class="point-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47">
                            <path fill="#0A0A0A" fill-rule="evenodd" d="M43.297 33.811a16.372 16.372 0 0 1-8.518 5.448v6.823a.92.92 0 0 1-1.567.649l-6.953-6.953h-9.944C7.319 39.778 0 32.459 0 23.462c0-2.772.708-5.511 2.049-7.919a.916.916 0 1 1 1.603.892 14.478 14.478 0 0 0-1.816 7.027c0 7.984 6.495 14.48 14.479 14.48h10.324c.244 0 .477.097.649.269l5.655 5.655v-5.334c0-.435.304-.81.729-.899 6.659-1.397 11.491-7.356 11.491-14.171 0-7.984-6.495-14.481-14.478-14.481h-1.156a.918.918 0 1 1 0-1.835h1.156C39.681 7.146 47 14.465 47 23.462c0 3.768-1.315 7.443-3.703 10.349zM25.52 8.981a.929.929 0 0 1-.65-.268.929.929 0 0 1-.268-.65c0-.241.098-.477.268-.648a.92.92 0 0 1 1.567.648.921.921 0 0 1-.269.65.924.924 0 0 1-.648.268zm-4.766 4.924h-4.966a1.448 1.448 0 0 1-1.446-1.447V7.681c0-6.053 3.459-7.519 6.361-7.682a.919.919 0 0 1 .969.917v2.747a.918.918 0 0 1-.835.914c-.474.044-1.502.137-1.754 1.997h1.671c.797 0 1.447.649 1.447 1.446v4.438a1.45 1.45 0 0 1-1.447 1.447zm-.39-5.495H18.11a.919.919 0 0 1-.919-.918c0-3.103 1.416-4.208 2.644-4.582v-.965c-1.78.333-3.657 1.513-3.657 5.736v4.388h4.186V8.41zm-8.161 7.882h22.594a.918.918 0 0 1-.001 1.836H12.203a.917.917 0 1 1 0-1.836zm0 4.896h22.594a.918.918 0 0 1-.001 1.836H12.203a.917.917 0 1 1 0-1.836zm22.593 9.792a.918.918 0 1 1 0 1.836H22.754a.918.918 0 1 1 0-1.836h12.042zm-17.208 0a.918.918 0 1 1 0 1.836h-.014a.918.918 0 1 1 0-1.836h.014zm-6.303-3.978c0-.507.41-.918.918-.918h22.594a.918.918 0 0 1-.001 1.836H12.203a.917.917 0 0 1-.918-.918zm.085-13.097H6.403a1.448 1.448 0 0 1-1.447-1.447V7.681c0-6.053 3.46-7.519 6.361-7.682a.92.92 0 0 1 .969.917v2.747a.917.917 0 0 1-.834.914c-.474.044-1.502.137-1.753 1.997h1.671c.796 0 1.445.649 1.445 1.446v4.438c0 .798-.649 1.447-1.445 1.447zm-.391-5.495H8.725a.919.919 0 0 1-.919-.918c0-3.103 1.416-4.208 2.644-4.582v-.965c-1.78.333-3.657 1.513-3.657 5.736v4.388h4.186V8.41z"></path>
                        </svg>
                    </div>
                    <h4 class="point-card-title">25 points</h4>
                    <p class="point-card-subtitle">Write a Product Review</p>
                </div>
            </div>
            <div class="w-1/4 md:w-1/2">
                <div class="point-card border-b md:border-b anim fade right">
                    <div class="point-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="49">
                            <path fill-rule="evenodd" d="M47.699 23.106L23.848 46.958h10.859a1.02 1.02 0 0 1 0 2.042H14.292a1.02 1.02 0 1 1 0-2.042h1.78L3.213 34.099v-.001h-.001l-1.913-1.913A4.417 4.417 0 0 1 0 29.039c0-1.191.461-2.308 1.299-3.145L25.893 1.299A4.413 4.413 0 0 1 29.038 0c1.191 0 2.308.461 3.145 1.299l15.516 15.516a4.454 4.454 0 0 1 0 6.291zm-1.444-4.847l-8.55-8.55-23.619 23.62c-.199.2-.46.299-.722.299a1.02 1.02 0 0 1-.721-1.742L36.262 8.265l-5.523-5.523a2.39 2.39 0 0 0-1.701-.7 2.39 2.39 0 0 0-1.701.7L2.742 27.338a2.39 2.39 0 0 0-.7 1.701c0 .646.249 1.25.7 1.702l1.193 1.192 23.619-23.62a1.02 1.02 0 1 1 1.443 1.443L5.379 33.377l12.88 12.881c.45.451 1.053.699 1.697.7h.008a2.388 2.388 0 0 0 1.697-.7l24.594-24.596a2.408 2.408 0 0 0 0-3.403zm-8.741 6.078a1.018 1.018 0 0 1-1.444 0l-2.887-2.887a1.023 1.023 0 0 1 0-1.444l4.331-4.331a1.025 1.025 0 0 1 1.444 0l2.887 2.887a1.02 1.02 0 0 1 0 1.444l-4.331 4.331zm.722-6.496l-2.887 2.887 1.443 1.444 2.888-2.887-1.444-1.444zM25.899 35.954a1.023 1.023 0 0 1-1.444 0 1.02 1.02 0 0 1 0-1.444l.433-.433a1.02 1.02 0 1 1 1.443 1.444l-.432.433zm-8.781 3.006a1.02 1.02 0 0 1-1.444 0 1.022 1.022 0 0 1 0-1.444l8.033-8.033a1.02 1.02 0 1 1 1.444 1.444l-8.033 8.033zm4.738-1.851a1.02 1.02 0 1 1 1.444 1.443l-3.294 3.295a1.023 1.023 0 0 1-1.444 0 1.02 1.02 0 0 1 0-1.444l3.294-3.294zm-10.584-.964a1.022 1.022 0 0 1-1.444-1.444l.433-.433a1.02 1.02 0 1 1 1.444 1.444l-.433.433zM30.368 5.498a1.022 1.022 0 0 1 1.444 1.443l-.433.433c-.199.2-.46.299-.722.299a1.021 1.021 0 0 1-.722-1.742l.433-.433z"></path>
                        </svg>
                    </div>
                    <h4 class="point-card-title">75 points</h4>
                    <p class="point-card-subtitle">Punch Card<br>(Make 5 Purchases ($50+))</p>
                </div>
            </div>
            <div class="w-1/4 md:w-1/2">
                <div class="point-card border-r md:border-br anim fade left">
                    <div class="point-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="65">
                            <path fill-rule="evenodd" d="M71.704 65h-37.06a3.278 3.278 0 0 1-2.33-.966 3.276 3.276 0 0 1-.966-2.332V47.684v-.003a1.102 1.102 0 0 1 1.099-1.097 1.1 1.1 0 0 1 1.098 1.1v14.018a1.103 1.103 0 0 0 1.099 1.099h37.06a1.104 1.104 0 0 0 1.099-1.099V35.688H39.545L10.893 64.356a2.195 2.195 0 0 1-3.108 0l-6.214-6.218a2.198 2.198 0 0 1 0-3.109l3.823-3.826-4.211-4.214c-2.195-2.196-1.189-5.94 1.806-6.743l8.22-2.204a5.454 5.454 0 0 1 2.905-2.906l2.202-8.224a3.99 3.99 0 0 1 2.849-2.85 3.985 3.985 0 0 1 3.89 1.043l4.212 4.214 3.823-3.826a2.2 2.2 0 0 1 3.108 0l6.214 6.218c.486.486.695 1.143.631 1.778h3.931l-.521-.508c-1.468-1.431-.658-3.928 1.371-4.223l2.821-.411 1.263-2.558c.906-1.839 3.53-1.84 4.438 0l1.261 2.558 2.822.411c2.028.294 2.84 2.791 1.371 4.223l-.521.508h14.623c.598 0 1.098.488 1.098 1.1v27.113A3.296 3.296 0 0 1 71.704 65zM6.51 43.77l4.763-1.277a5.447 5.447 0 0 1-.499-2.058L3.557 42.37a1.812 1.812 0 0 0-1.295 1.295c-.171.64.006 1.301.474 1.77l4.211 4.214 5.079-5.082-4.947 1.327a1.1 1.1 0 0 1-.569-2.124zm8.823-6.741c-2.423.707-3.192 3.806-1.331 5.562 1.541-1.542 3.115-3.118 4.657-4.659a3.28 3.28 0 0 0-3.326-.903zm6.168-10.369c-.997-.998-2.699-.541-3.063.821l-1.933 7.22c.706.03 1.404.198 2.057.5l1.276-4.765a1.1 1.1 0 0 1 2.122.569l-1.326 4.95 5.079-5.081-4.212-4.214zm11.142.388l-4.6 4.603L7.724 51.98l-4.6 4.603 6.215 6.218 29.52-29.536-6.216-6.217zm25.47 3.885l-3.393-.493a1.099 1.099 0 0 1-.828-.601c-1.638-3.321-1.528-3.231-1.766-3.231-.237 0-.128-.09-1.766 3.231a1.1 1.1 0 0 1-.827.601c-3.652.531-3.543.454-3.617.682-.074.226-.09.128 2.205 2.367h8.01l2.136-2.082a.277.277 0 0 0-.154-.474zM68.63 7.475a1.099 1.099 0 1 1 0-2.198 1.099 1.099 0 0 1 0 2.198zm.657 21.677a1.099 1.099 0 1 1-2.198.002 1.099 1.099 0 0 1 2.198-.002zm-4.71-13.866l-.405.133.255.354c.526.732-.006 1.742-.89 1.742-.649 0-.902-.47-1.133-.791l-.24.334a1.1 1.1 0 1 1-1.783-1.285l.255-.354-.405-.133a1.1 1.1 0 0 1-.703-1.387 1.1 1.1 0 0 1 1.387-.702l.39.128v-.427a1.099 1.099 0 1 1 2.198 0v.427l.389-.128a1.1 1.1 0 1 1 .685 2.089zm-7.814 6.552a1.1 1.1 0 0 1 0-2.199 1.099 1.099 0 1 1 0 2.199zM50.61 10.259a1.1 1.1 0 0 1 0 2.199 1.099 1.099 0 0 1 0-2.199zm3.104-6.772l-.405.133.255.354c.354.493.242 1.18-.25 1.535a1.097 1.097 0 0 1-1.533-.25l-.241-.334c-.243.339-.492.791-1.132.791-.887 0-1.416-1.011-.891-1.741l.255-.355-.405-.133a1.1 1.1 0 0 1 .684-2.089l.391.128v-.427a1.098 1.098 0 1 1 2.196 0v.427l.391-.128a1.098 1.098 0 0 1 .685 2.089zm-5.548 13.442l-1.547 1.508.365 2.131c.022.124.032.251.032.379.004 1.639-1.766 2.71-3.219 1.938l-1.912-1.005h-.002c-2.004 1.055-2.245 1.26-2.931 1.26a2.2 2.2 0 0 1-2.167-2.572l.364-2.131c-1.553-1.515-2.219-1.936-2.21-3.076 0-.517.172-1.003.498-1.403.66-.818 1.342-.773 3.521-1.09l.955-1.937c.786-1.612 3.135-1.653 3.942 0l.479.968a1.103 1.103 0 0 1-.986 1.588c-.421 0-.8-.236-.986-.615l-.477-.968-1.213 2.456a1.1 1.1 0 0 1-.827.601l-2.71.394 1.961 1.911a1.1 1.1 0 0 1 .315.974l-.462 2.7.003-.002h.001c3.204-1.686 2.637-1.698 5.864.002h.002l-.463-2.7a1.1 1.1 0 0 1 .317-.974l1.959-1.911a1.097 1.097 0 0 1-.928-1.246 1.101 1.101 0 0 1 1.245-.93s.811.071 1.382.779c.721.887.66 2.174-.165 2.971z"></path>
                        </svg>
                    </div>
                    <h4 class="point-card-title"><small>for VIP members</small><br>100, 150, 200 points</h4>
                    <p class="point-card-subtitle">Birthday Bonus</p>
                </div>
            </div>
            <div class="w-1/4 md:w-1/2">
                <div class="point-card border-r md:border-b anim fade down">
                    <div class="point-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="46">
                            <path fill="#0A0A0A" fill-rule="evenodd" d="M15.705 46H5.579V25.376H0v-9.472h5.579v-5.319C5.579 5.701 8.703 0 17.515 0c3.106 0 5.387.285 5.482.297l.935.119-.226 8.864-1.03-.009c-.001 0-2.316-.022-4.841-.022-1.88 0-2.129.453-2.129 2.257v4.4H24l-.459 9.472h-7.834V46h-.002zm-8.033-2.047h5.938V23.33h7.93l.261-5.38H13.61v-6.447c0-2.128.501-4.303 4.222-4.303 1.495 0 2.916.007 3.83.015l.127-4.984a50.04 50.04 0 0 0-4.276-.184c-7.257 0-9.843 4.41-9.843 8.538v7.365H2.091v5.38h5.58v20.623h.001z"></path>
                        </svg>
                    </div>
                    <h4 class="point-card-title">10 points</h4>
                    <p class="point-card-subtitle">Follow on Facebook</p>
                </div>
            </div>
            <div class="w-1/4 md:w-1/2">
                <div class="point-card border-r anim fade down">
                    <div class="point-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48">
                            <path fill="#0A0A0A" fill-rule="evenodd" d="M11.636.378C23.018.247 39.544-1.718 44.58 4.836c1.172 1.527 2.272 3.631 2.76 5.76.925 4.021.865 24.296-.184 27.87-.826 2.822-2.643 5.53-4.784 7.06-3.405 2.435-8.166 2.416-14.172 2.416-11.764 0-21.728 1.079-26.134-6.317-2.74-4.6-2.75-30.335 0-34.931 2.303-3.849 5.215-4.405 9.57-6.316zm.184 2.786C8.743 4.58 6.318 5.069 4.642 7.81c-2.458 4.019-2.466 28.684 0 32.7 3.642 5.93 13.54 4.645 23.007 4.645 5.175 0 10.11.291 13.066-1.858 1.508-1.097 3.07-3.252 3.682-5.202.963-3.073 1.066-23.627.183-27.127-.461-1.835-1.656-4.135-2.944-5.202-5.366-4.445-20.387-2.69-29.816-2.602zm24.662 3.345c3.107-.046 4.571 1.538 4.417 4.83-.869 1.949-1.83 2.897-4.785 2.787-4.03-1.781-2.961-5.947.368-7.617zm.369 2.787l-.553.743v.743c.122.186.245.372.369.557.83-.04.992-.13 1.472-.371-.055-1.038-.189-1.085-.552-1.672h-.736zm-14.356 1.858c17.977-.433 18.789 23.175 2.944 26.012-8.672 1.552-16.426-7.883-13.987-16.536 1.671-5.932 5.614-7.189 11.043-9.476zm.184 2.787c-4.293 1.824-7.43 2.982-8.651 7.803-1.765 6.972 4.238 13.979 11.227 12.634 12.319-2.369 11.682-20.786-2.576-20.437z"></path>
                        </svg>
                    </div>
                    <h4 class="point-card-title">10 points</h4>
                    <p class="point-card-subtitle">Follow on Instagram</p>
                </div>
            </div>
            <div class="w-1/4 md:w-1/2">
                <div class="point-card border-none anim fade right">
                    <div class="point-card-icon"></div>
                    <h4 class="point-card-title">REFER A FRIEND</h4>
                    <p class="point-card-subtitle">Refer a friend and get $10</p>
                    <a href="/refer-a-friend" class="point-card-action">Start referring now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section vips">
        <h2 class="section-title text-center">
        VIPs EARN EVEN MORE</h1>
        <p class="section-subtitle text-center">The more you spend, the more exclusive perks you unlock!</p>
        <div class="bg-surface">
            <div class="container xl f f-a-i-center f-wrap">
                <div class="vips-text w-2/5 border-r md:w-100 md:border-b text-center anim fade left">
                    <div class="vips-text-wrapper inline-block text-left md:text-center">
                        <h3 class="vips-text-title"><i>REDEEM FOR DISCOUNTS</i></h3>
                        <p>Redeeming your hard-earned points is easy!<br>Simply apply your points for a discount in your cart!</p>
                        <h4 class="vips-text-subtitle"><i>Every 100 Points = $10</i></h4>
                    </div>
                </div>
                <div class="vips-examples w-3/5 f f-a-i-center f-wrap md:w-100 anim fade right">
                    <div class="vips-example border-r md:border-b">
                        <h3 class="vips-example-title"><i>$10 off</i></h3>
                        <h5 class="vips-example-subtitle"><i>100 points</i></h5>
                    </div>
                    <div class="vips-example border-r md:border-b">
                        <h3 class="vips-example-title"><i>$15 off</i></h3>
                        <h5 class="vips-example-subtitle"><i>150 points</i></h5>
                    </div>
                    <div class="vips-example">
                        <h3 class="vips-example-title"><i>$20 off</i></h3>
                        <h5 class="vips-example-subtitle"><i>200 points</i></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();