@extends('components.layout')

@section('content')
    <form method="POST" action="{{ route('faq.store') }}">
        @csrf
        <label for="question">Question:</label><br>
        <input type="text" id="question" name="question"><br>

        <div id="subquestions-container">
            <div class="subquestion">
                <input type="text" name="subquestions[]" placeholder="Subquestion">
                <input type="text" name="answers[]" placeholder="Answer">
                <button type="button" class="remove-subquestion">Remove</button>
            </div>
        </div>

        <button type="button" id="add-subquestion">Add Subquestion</button><br>

        <button type="submit">Submit</button>
    </form>
    <script>
        document.getElementById('add-subquestion').addEventListener('click', function () {
            const container = document.getElementById('subquestions-container');
            const subquestion = document.createElement('div');
            subquestion.classList.add('subquestion');
            subquestion.innerHTML = `
                <input type="text" name="subquestions[]" placeholder="Subquestion">
                <input type="text" name="answers[]" placeholder="Answer">
                <button type="button" class="remove-subquestion">Remove</button>
            `;
            container.appendChild(subquestion);
        });
    
        document.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('remove-subquestion')) {
                e.target.parentElement.remove();
            }
        });
    </script>
@endsection
