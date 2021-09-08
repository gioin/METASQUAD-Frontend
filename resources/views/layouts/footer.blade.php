<footer>
    <!-- Footer SECTION -->
    <div class="container container--column">
        <div class="firstsection">
            <div class="logo">
                <a href="#"><img src="{{asset('img/bottom_logo.svg')}}" alt="Web logo" /></a>
            </div>

            <ul>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Legal</a></li>
            </ul>
        </div>
        <div class="secondsection">
            <div class="touchinfo">
                <div class="secondsection__adress">
                    {{$contact_details->address}}, {{$contact_details->city}}, {{$contact_details->state}}, {{$contact_details->zip}}, USA
                </div>
                <div class="secondsection__contact">
                    {{$contact_details->email}} {{$contact_details->phone}}
                </div>
                <div class="secondsection__inc">© 2021 Meta Squad Gaming</div>
            </div>
            <div class="social_media">
                <p>Follow us on:</p>
                <a
                    class="logo first"
                    rel="noopener"
                    target=" _blank"
                    href="https://www.facebook.com/MetaSquadGaming"
                ><img src="{{asset('img/facebook_white.svg')}}" alt="Facebook logo"
                    /></a>

                <a
                    class="logo"
                    rel="noopener"
                    target=" _blank"
                    href="https://www.instagram.com/metasquadgaming/"
                ><img src="{{asset('img/instagram_white.svg')}}" alt="Instagram logo"
                    /></a>
                    <a
                    class="logo"
                    rel="noopener"
                    target=" _blank"
                    href="https://www.tiktok.com/@metasquadgaming?lang=en"
                ><img class="img-tiktok" src="{{asset('img/tiktok_white.png')}}" alt="Tiktok logo"
                    /></a>
                <a
                    class="logo"
                    rel="noopener"
                    target=" _blank"
                    href="https://twitter.com/metasquadgaming"
                ><img src="{{asset('img/twitter_white.svg')}}" alt="Twiter logo"
                    /></a>
                    <a
                            class="logo"
                            rel="noopener"
                            target=" _blank"
                            href="https://www.twitch.tv/metasquadgaming"
                        ><img class="img-twitch" src="{{asset('img/twitch_white.png')}}" alt="Twiter logo"
                            /></a>
                <a
                    class="logo"
                    rel="noopener"
                    target=" _blank"
                    href="https://www.youtube.com/channel/UC_dlxuFuNiDcLDUt1NedAeg"
                ><img class="img-youtube" src="{{asset('img/youtube_white.svg')}}" alt="Youtube logo"
                    /></a>
                    <a
                    class="logo"
                    rel="noopener"
                    target=" _blank"
                    href="https://discord.gg/zKTGdE8k"
                ><img class="img-discord" src="{{asset('img/discord_white.svg')}}" alt="Discord logo"
                    /></a>
            </div>
        </div>
    </div>
</footer> <!-- Footer END -->
