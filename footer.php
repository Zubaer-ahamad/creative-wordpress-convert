<!-- footer start hare -->
<footer>
    <div class="container">
        <div class="footer-container">
            <div>
                <h3 class="footer-title">About</h3>
                <p class="footer-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam</p>
                <p class="footer-email"><span class="title-name">Email</span>: info@jstemplate.net</p>
                <p><span class="title-name">Phone</span>: 880 123 456 789</p>
            </div>

            <div>
                <h3 class="footer-title">Quick Link</h3>
                <div class="footer-icon">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Blog</a>
                    <a href="#">Archived</a>
                    <a href="#">Author</a>
                    <a href="#">Contact</a>
                </div>
            </div>

            <div>
                <h3 class="footer-title">Category</h3>
                <div class="footer-icon">
                    <a href="#">Lifestyle</a>
                    <a href="#">Technology</a>
                    <a href="#">Travel</a>
                    <a href="#">Business</a>
                    <a href="#">Economy</a>
                    <a href="#">Sports</a>
                </div>
            </div>

            <div class="footer-box">
                <h2 class="box-title">Weekly Newsletter</h2>
                <p class="footer-subtitle">Get blog articles and offers via email</p>
                <div class="input-box">
                    <input class="email-field" type="email" name="email" placeholder="Your Email">
                    <i class="fa-regular fa-envelope"></i>
                </div>
                <button class="subscribe-btn">Subscribe</button>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="end-section">
                <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?> /assets/images/footer-logo.png" alt="">
                <div>
                    <h4 class="meta-title">Meta <span class="meta-sub-title">Blog</span></h4>
                    <p>© JS Template 2023. All Rights Reserved.</p>
                </div>
            </div>
            <div class="bottom-icon">
                <a href="#">Terms of Use</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>
<!-- footer end hare -->
<?php wp_footer(); ?>
</body>

</html>