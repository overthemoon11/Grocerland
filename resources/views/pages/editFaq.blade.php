@extends('components.layout')


@section('content')
    <h2>Edit FAQ</h2>
    <form action="{{ route('faq.update', $faq->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="big_title">Big Title</label>
            <input type="text" id="big_title" name="big_title" value="{{ $faq->big_title }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="subquestions">Subquestions</label>
            <textarea id="subquestions" name="subquestions" class="form-control" rows="3">{{ implode("\n", array_column($faq->subquestions_answers, 'subquestion')) }}</textarea>
        </div>
        <div class="form-group">
            <label for="answers">Answers</label>
            <textarea id="answers" name="answers" class="form-control" rows="3">{{ implode("\n", array_column($faq->subquestions_answers, 'answer')) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update FAQ</button>
    </form>
@endsection
