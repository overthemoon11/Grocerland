@extends('components.layout')

@section('content')
    <div class="faq-image">
        <div class="faq-search-bar">
            <input type="text" id="faqSearchInput" placeholder="Search...">
            <button type="button" onclick="searchFaq()">Search</button>
        </div>
        <img src="../assets/images/faqheader.svg" alt="Image">
    </div>
    <h2 class="faq-title">Frequently Asked Questions</h2>
    <div class="faq-container">
        @foreach($faqs as $faq)
            <div class="faq-section">
                <div class="faq-header" data-toggle="collapse" data-target="#faq-{{ $loop->index }}">
                    <h3>{{ $faq->big_title }}</h3>
                    <div class="seller-buttons">
                        <a href="{{ route('faq.edit', $faq->id) }}" class="edit-button">Edit</a>
                        <form action="{{ route('faq.destroy', $faq->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button">Delete</button>
                        </form>
                    </div>
                    <span class="arrow">&#x25BC;</span>
                </div>
                <div id="faq-{{ $loop->index }}" class="faq-content collapse">
                    @foreach($faq->subquestions_answers as $subqa)
                        <div class="faq-subsection">
                            <div class="faq-subheader" data-toggle="collapse" data-target="#subfaq-{{ $loop->parent->index }}-{{ $loop->index }}">
                                <h4>{{ $subqa['subquestion'] }}</h4>
                                <div class="seller-buttons">
                                    <form action="{{ route('faq.destroySub', ['faqId' => $faq->id, 'subIndex' => $loop->index]) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-button">Delete</button>
                                    </form>
                                </div>
                                <span class="arrow">&#x25BC;</span>
                            </div>
                            <div id="subfaq-{{ $loop->parent->index }}-{{ $loop->index }}" class="faq-subcontent collapse">
                                @if (!empty($subqa['answer']))
                                    <p>{{ $subqa['answer'] }}</p>
                                @else
                                    <p>No answer</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <a href="{{ route('faq.create') }}" class="add-button">Add FAQ</a>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var headers = document.querySelectorAll('[data-toggle="collapse"]');
            
            headers.forEach(function(header) {
                header.addEventListener('click', function() {
                    var target = document.querySelector(header.getAttribute('data-target'));
                    
                    if (target.style.display === "none" || target.style.display === "") {
                        target.style.display = "block";
                        header.querySelector('.arrow').style.transform = 'rotate(0deg)';
                    } else {
                        target.style.display = "none";
                        header.querySelector('.arrow').style.transform = 'rotate(-90deg)';
                    }
                });
            });
        });

        function searchFaq() {
            var input, filter, faqSections, faqHeaders, faqSubheaders, i, txtValue;
            input = document.getElementById('faqSearchInput');
            filter = input.value.toUpperCase();
            faqSections = document.querySelectorAll('.faq-section');

            faqSections.forEach(function(section) {
                faqHeaders = section.querySelectorAll('.faq-header');
                faqSubheaders = section.querySelectorAll('.faq-subheader');

                var found = false;
                faqHeaders.forEach(function(header) {
                    txtValue = header.textContent || header.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        section.style.display = "";
                        found = true;
                    }
                });

                if (!found) {
                    faqSubheaders.forEach(function(subheader) {
                        txtValue = subheader.textContent || subheader.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            section.style.display = "";
                        } else {
                            section.style.display = "none";
                        }
                    });
                }
            });

            if (filter.trim() === '') {
                faqSections.forEach(function(section) {
                    section.style.display = "";
                });
            }
        }
    </script>
@endsection
