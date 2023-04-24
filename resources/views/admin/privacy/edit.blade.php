<x-layout>
    <x-labels>
        <a class="active" href="#">Games</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Edit</h3>
            <div class="action-icons">
                <a href="{{ route('privacy') }}"> <i class='bx bxs-left-arrow-circle'></i></a>
            </div>
        </div>
        <div class="form-container pr-5">
            <form method="POST" action="{{route('update-privacy',$privacy->id)}}">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="title">Time</label>
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{$privacy->title}}">
                            @error('title')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="6">{{$privacy->description}}</textarea>
                            @error('description')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="submit-btn mt-2">
                    <input type="submit" value="Submit" class="button mt-2">
                </div>
            </form>
        </div>
    </x-table>
</x-layout>
