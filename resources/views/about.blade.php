<!DOCTYPE html>

    @include('partials.header')
    <main class="container mx-auto text-center my-5">
        <h3 class=" text-3xl my-3">Strudents:</h3>
        <ul class=" flex flex-wrap justify-center gap-4">
            @foreach ($students as $std)
                <li>
                    <div class="overflow-hidden bg-white rounded shadow-md text-slate-500 shadow-slate-200 w-[300px] hover:scale-110 transition-all">
                        <figure>
                          <img src="https://picsum.photos/id/777/800/600" alt="card image" class="aspect-video w-full" />
                        </figure>
                        <div class="p-6">
                          <header>
                            <h3 class="text-xl font-medium text-slate-700">{{$std}}</h3>
                            <p class="text-sm text-slate-400">Student</p>
                          </header>
                        </div>
                      </div>
                </li>
            @endforeach
        </ul>
        <h3 class=" text-3xl my-3">Teachers:</h3>
        <ul class=" flex flex-wrap justify-center gap-4">
            @foreach ($teachers as $tch)
                <li>
                    <div class="overflow-hidden bg-white rounded shadow-md text-slate-500 shadow-slate-200 w-[300px] hover:scale-110 transition-all">
                        <figure>
                          <img src="https://picsum.photos/id/27/800/600" alt="card image" class="aspect-video w-full" />
                        </figure>
                        <div class="p-6">
                          <header>
                            <h3 class="text-xl font-medium text-slate-700">{{$tch}}</h3>
                            <p class="text-sm text-slate-400">Teacher</p>
                          </header>
                        </div>
                      </div>
                </li>
            @endforeach
        </ul>
    </main>
</body>

</html>
