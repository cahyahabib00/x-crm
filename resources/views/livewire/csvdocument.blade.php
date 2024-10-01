<div>
  <!-- Form Input -->
  <form wire:submit="create">
    <div class="card card-compact">

      <div class="text-yellow-300 text-lg my-2">Name</div>
      <input type="text" class="grow text-black" placeholder="Daisy" wire:model="name" />
      <div>
        @error('name') <span class="error">{{ $message }}</span> @enderror
      </div>
      
      <div class="text-yellow-300 text-lg my-2">Name</div>
      <input type="text" class="grow text-black" placeholder="Daisy" wire:model="name" />
      <div>
        @error('name') <span class="error">{{ $message }}</span> @enderror
      </div>

      
    </div>

    <button type="submit" class="btn btn-success my-4">Simpan</button>
  </form>

  <!-- Button for Modal -->
  {{-- <button class="btn btn-info" onclick="my_modal_1.showModal()">Import data from csv</button> --}}
  
  <!-- Modal toggle button -->



<form wire:submit.prevent="import">
  <input
  type="file"
  class="file-input file-input-bordered file-input-success w-full max-w-xs" wire:model="csvdata"/>
  <button type="submit" class="btn btn-primary">Upload</button>
</form>




  <!-- Modal for Import CSV -->
  {{-- <dialog id="my_modal_1" class="modal">
    <div class="modal-box mt-10">
        <div class="modal-action block">
            <form wire:submit.prevent="import">
                <div class="my-4">
                    <input type="file" id="csvfile" class="file-input file-input-bordered w-full max-w-xs" wire:model="csvdata" />
                </div>
             
                <button type="button" class="btn btn-error" onclick="my_modal_1.close()">Close</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</dialog> --}}


    {{-- //ini yang pake modal --}}
{{-- <dialog id="my_modal_1" class="modal">
  <div class="modal-box mt-10">
      <div class="modal-action block">
          <form wire:submit.prevent="import">
              <div class="mb-3">
                  <label for="formFile" class="form-label">Default file input example</label>
                  <input class="form-control" type="file" id="formFile" wire:model="csvdata">
              </div>
              
              <button type="button" class="btn btn-error" onclick="my_modal_1.close()">Close</button>
              <button type="submit" class="btn btn-success">Upload</button>
          </form>
      </div>
  </div>
</dialog> --}}

<button wire:click="pdfDownload">Halo</p>


  <!-- Table for Displaying Data -->
  <table class="table">
    <!-- head -->
    <thead>
      <tr class="text-lg text-yellow-300">
        <th>No</th>
        <th>Name</th>
        <th>Hendel</th>
        <th>Bio</th>
        <th>Location</th>
        <th>Website</th>
        <th>Join Date</th>
        <th>Following Cout</th>
        <th>Tweet Count</th>
        <th>Is Verifed</th>
        <th>Profile Img Url</th>
        <th>bannerImageUrl</th>
        
      </tr>
    </thead>
    <tbody>
      <!-- Loop through data -->
      @foreach ($data as $item)
      <tr class="bg-base-200">
        <th>{{ $loop->iteration }}</th> <!-- Show row number -->
        <td>{{ $item->name }}</td>
        <td>{{ $item->hendel }}</td>
        <td>{{ $item->location }}</td>
        <td>{{ $item->bio }}</td>
        <td>{{ $item->website }}</td>
        <td>{{ $item->joinDate }}</td>
        <td>{{ $item->followingCount }}</td>
        <td>{{ $item->tweetCount }}</td>
        <td>{{ $item->isVerifed }}</td>
        <td>{{ $item->profileImageUrl }}</td>
        <td>{{ $item->bannerImageUrlb }}</td>
        
        
        <td>
          <button type="button" class="btn btn-warning my-4" wire:click="delete({{ $item->id }})">Hapus</button>
          <button type="button" class="btn btn-primary my-4">Update</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
