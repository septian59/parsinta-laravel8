<input type="text" class="form-control @error('list') is-invalid @enderror" name="list" value="{{old('list') ?? $task->list}}" placeholder="masukan list">
    @error('list')
        <span class="invalid-feedback">{{$message}}</span>
    @enderror

<button class="btn btn-primary mt-3" type="submit">{{$submit}}</button>