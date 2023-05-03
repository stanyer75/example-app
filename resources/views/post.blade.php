<!-- page used to display the individual posts after they are clicked on in the main page -->

<!DOCTYPE html>

<title>My blog</title>
<link rel="stylesheet" href="/app.css">


    <body>
        <article>
            <h1>{!!$post -> title!!}</h1>

            <div>

                {!!$post->body!!}

            </div>
        </article>

        <a href="/">Go Back</a>
    </body>
