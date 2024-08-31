<main>

    <livewire:frontend.partials.home-slider />
    {{-- <livewire:frontend.partials.home-banner /> --}}
    {{-- <livewire:frontend.partials.home-projects /> --}}

    {{-- @if (array_key_exists('about', $data))
        <livewire:frontend.partials.home-about-section :item="$data['about']" />
    @endif --}}

    <livewire:frontend.partials.solutions-section sectionTitle="solutions" sectionSubTitle="Our provided best solutions"
        :limit="5" />

    <livewire:frontend.partials.products-section sectionTitle="products"
        sectionSubTitle="Our most valuable next-gen products" :limit="6" />

    <livewire:frontend.components.why-choose-us-section sectionTitle="why choose us"
        sectionSubTitle="why you will give us priority" />

    {{-- <livewire:frontend.partials.home-work-process-section /> --}}

    {{-- <livewire:frontend.partials.home-blog-section /> --}}
</main>
