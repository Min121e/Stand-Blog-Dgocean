@props(['tags'])
<x-adminlayout.layout>
  
    <x-adminform.flashnoti :success="session('success')" />

<div class="m-4 p-4 ">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-center">Tags</h1>
        <a href="/admin/tags/create" class="btn btn-primary text-white">Create New Item</a>
    </div>
    <form action="" class="row ">
        <div class="d-flex flex-col col-md-11 form-group">
            <label for="search">Search</label>
            <input type="text" value="{{request('search')}}" name="search" class="form-control rounded-md" placeholder="Please enter to search">
        </div>
        <div class="d-flex flex-col justify-content-center col-md-1 ">
            <button class="btn btn-primary px-2 py-2 text-white text-base">Filter</button>
        </div>
    </form>

    <table class="table table-hover border-t">
        <thead>
          <tr>
            <th scope="col"><strong>#</strong></th>
            <th scope="col"><strong>Name</strong></th>
            <th scope="col"><strong>Slug</strong></th>
            <th scope="col"><strong># of Blogs</strong></th>
            {{-- <th scope="col"><strong>Created at</strong></th> --}}
            <th scope="col"><strong>Actions</strong></th>
          </tr>
        </thead>
        <tbody>
          @forelse ($tags->reverse() as $index => $tag)
            <tr>
              <th scope="row">{{$index + 1}}</th>
              <td>{{ucwords($tag->name)}}</td>
              <td>{{$tag->slug}}</td>
              <td>{{$tag->blog->count()}}</td>
              {{-- <td>{{$tag->created_at->format('Y-m-d')}}</td> --}}
              <td class="d-flex gap-2">
                <a href="/admin/tags/{{$tag->slug}}/edit" type="" class="btn btn-primary text-white">Edit</a>
                <form action="/admin/tags/{{$tag->slug}}/delete" method="post" onsubmit="return confirm('Are you sure you want to delete this tag?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger bg-danger text-white">Delete</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="7" class="border border-white ">
                  <h1 class="text-center text-xl">No Tag Found</h1>
              </td>
            </tr> 
          @endforelse
        </tbody>
    </table>
    {{$tags->links()}}
  </div>
</x-adminlayout.layout>