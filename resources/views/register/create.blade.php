<x-layout>

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">

            <h1 class="text-center font-bold text-xl">
                Register!
            </h1>

            <form mehtod="POST" action="/register" class="mt-10">

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="name">

                        Name

                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                            type="text"
                            name="name"
                            id="name"
                            required
                        >
                </div>


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="username">

                        Username
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                            type="text"
                            name="username"
                            id="username"
                            required
                        >

                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="Password">

                        Password

                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                            type="password"
                            name="Password"
                            id="username"
                            required
                        >
                </div>

                <div class="mb-6">
                    <button type="sumbit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        Submit
                    </button>

            </form>
        </main>
    </section>
</x-layout>
