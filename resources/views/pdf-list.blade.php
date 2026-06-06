<h1>Uploaded PDFs</h1>

@foreach($documents as $document)

    <p>{{ $document->pdf_path }}</p>

    <a href="{{ asset('storage/'.$document->pdf_path) }}" target="_blank">
        Open PDF
    </a>

    <hr>

@endforeach