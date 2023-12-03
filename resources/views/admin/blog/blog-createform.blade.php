@props(['category', 'tag'])
<x-adminlayout.layout>
<div class=" d-flex justify-center mt-10 ml-10">
    <div class="col-7 grid-margin stretch-card">
      <div class="card custom-card border border-grey">
        <div class="card-body custom-card">
          <h4 class="card-title">Create New Blog</h4>
            <form class="forms-sample" method="POST" action="/admin/blogs/store" enctype="multipart/form-data" >
                @csrf
                @method('post')
                <x-adminform.input name='thumbnail' type='file' class="border border-black p-2"/>
                <x-adminform.input name='title' />
                <x-adminform.input name='slug' />
                <x-adminform.textarea name='body' />
                
                {{-- <x-adminform.select name="category" :options="$category" />
                <x-adminform.select name="tag" :options="$tag" class="rounded-start" multiple /> --}}


                <div class="form-group">
                    <label for="category">Category</label>
                    <select required name="category" id="category" class="form-select border border-dark mb-1">
                        
                        <option value="">Select Category</option>
                        @foreach ($category as $cat)
                            <option value="{{$cat->slug}}" @selected(old('category') == $cat->name)>{{ucwords($cat->name)}}</option>
                        @endforeach
                    </select>
                    <a href="/createCategory" class="text-primary">Create New Category</a>
                    <x-ccomponents.error name="category" />
                </div>

                <div class="form-group">
                    <label for="tag">Tags (Press CTRL to select multiple tags up to 3)</label>
                    <select required name="tag[]" value="{{old('tag.0', '')}}" id="tag" multiple class="form-select border border-dark rounded-start mb-1">
                        @foreach ($tag as $t)
                            <option value="{{$t->slug}}" {{in_array($t->slug, old('tag', []))? "selected": ""}}>       
                                {{ucwords($t->name)}}</option>
                        @endforeach
                    </select>
                    <a href="/createTag" class="text-primary">Create New Tag</a>
                    <x-ccomponents.error name="tag" />
                </div>
                
                <div class="d-flex justify-content-end">
                    <a href="/admin/blogs" class="btn btn-light me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary bg-primary">Submit</button>
                </div>
            </form>
        </div>
      </div>
  </div>
</div>
</x-adminlayout.layout>