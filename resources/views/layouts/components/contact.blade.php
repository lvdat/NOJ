@unless(blank(config("contact.email"))) <p class="mb-0"><i class="MDI email"></i> {{config("contact.email")}}</p> @endunless
@unless(blank(config("contact.tel"))) <p class="mb-0"><i class="MDI phone"></i> {{config("contact.tel")}}</p> @endunless
@unless(blank(config("contact.facebook"))) <p class="mb-0"><a href="https://www.facebook.com/{{config("contact.facebook")}}" target="_blank"><i class="MDI facebook"></i> Facebook</a></p> @endunless
@unless(blank(config("contact.twitter"))) <p class="mb-0"><a href="https://twitter.com/{{config("contact.twitter")}}" target="_blank"><i class="MDI twitter"></i> Twitter</a></p> @endunless
