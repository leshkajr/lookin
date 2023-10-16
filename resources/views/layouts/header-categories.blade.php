<div class="header-categories">
    <div class="scroll-container d-flex flex-row align-items-center justify-content-center">
        <button class="scroll-button scroll-button-left" onclick="scrollContentLeft()">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
        </button>
        <div class="content-header-categories nav-scroller__items ">
            @foreach($categoriesListing as $category)
                <div class="nav-scroller__item d-flex flex-column align-items-center justify-content-center">
                    <a class="item-category d-flex align-items-center justify-content-center" href="#">
                        <img src="{{ asset($category->iconPath) }}"/>
                    </a>
                    <div>@lang('categories.'.$category->nameCategoryListing)</div>
                </div>
            @endforeach
        </div>
        <button class="scroll-button scroll-button-right" onclick="scrollContentRight()">
{{--            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" fill="currentColor"--}}
{{--                 class="bi bi-arrow-right-circle"--}}
{{--                 viewBox="0 0 16 16">--}}
{{--                <path fill-rule="evenodd"--}}
{{--                      d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>--}}
{{--            </svg>--}}
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </button>
        <button class="header-filters d-flex flex-row gap-3 px-3 align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#filtersModal">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                     class="bi bi-sliders" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                </svg>
            </div>
            <div>@lang("main.filters")</div>
        </button>
    </div>
</div>
