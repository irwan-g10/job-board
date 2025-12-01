<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index')]"/>
    <x-card class="mb-4 text-sm">
        <form action="{{ route('jobs.index') }}" method="GET">
        <div class="mb-4 grid grid-cols-2 gap-4">
            <div>
                <div class="mb-1 font-semibold">Search</div>
                <x-text-input placeholder="Search for any text" name="search" value="" />
            </div>
            <div>
                <div class="mb-1 font-semibold">Salary</div>
                <div class="flex space-x-2">
                    <x-text-input placeholder="from" name="min_salary" value="" />
                    <x-text-input placeholder="to" name="max_salary" value="" />
                </div>
            </div>
            <div>3</div>
            <div>4</div>
        </div>

        <button class="w-full">Filter</button>
        </form>
    </x-card>

    @foreach ($jobs as $job)

    <x-job-card class="mb-4" :job="$job">

        <div>
            <x-link-button :href="route('jobs.show', $job)">
                Show
            </x-link-button>
        </div>

    </x-job-card>

    @endforeach
</x-layout>
