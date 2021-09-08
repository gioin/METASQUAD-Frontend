<header> <!-- Header START -->
    <div class="container container--padding">
        <div class="info">
            <div class="social_media">
                <div class="follow_text">Follow us on:</div>
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

            <div class="registration-account">
                @auth
                    <a class="userbox" href="{{route('profile')}}">
                        <div class="circle"><span class="user"></span></div>
                        <p>{{Auth::user()->name}}</p>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">log out</button>
                    </form>
                @else
            <div class="registration">
               <a href="{{ route('login') }}"> <button>LOG IN</button></a>
                <a href="{{ route('register') }}"> <button>SIGN UP</button> </a>
                </div>
                @endauth
            </div>
        </div>
        <div class="menu">
            <div class="logo_area">
                <a href="{{route('home')}}">
                    <img class="logo" src="{{asset('img/mainlogo.webp')}}" alt="Main logo"
                    /></a>
            </div>
            <label for="myburger">
                <svg class="burger" viewBox="0 0 100 80" width="40" height="27">
                    <rect width="100" height="18"></rect>
                    <rect y="30" width="100" height="18"></rect>
                    <rect y="60" width="100" height="18"></rect>
                </svg>
            </label>
            <input type="checkbox" id="myburger" />
            <nav>
                <ul>
                    <li><a class="nav_link" href="{{route('home')}}">home</a></li>
                    <li><a class="nav_link" href="{{route('games')}}">games</a></li>
                    <li>
                        <a class="nav_link" href="#">results</a>
                        <ul>
                            @foreach($games_header as $game)
                            <li><a class="nav_link" href="{{route('results','game_id='.$game->id)}}">{{$game->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a class="nav_link" href="{{route('rules')}}">rules</a></li>
                    <li><a class="nav_link" href="{{route('about')}}">about us</a></li>
                    <li><a class="nav_link" href="{{route('contact')}}">contact</a></li>
                </ul>

                <div class="responsive_features">
                    <div class="social_media">
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
<div class="registration-account">
                        @auth
                            <a class="userbox" href="{{route('profile')}}">
                                <div class="circle"><span class="user"></span></div>
                                <p>{{Auth::user()->name}}</p>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit">log out</button>
                            </form>
                        @else
                        <div class="registration">
                            <a href="{{ route('login') }}"><button>LOG IN</button></a>
                            <a href="{{ route('register') }}"><button>SING UP</button></a>
                            </div>
                        @endauth

                    </div>
                </div>
            </nav>
        </div>
    </div>
</header> <!-- Header END -->
