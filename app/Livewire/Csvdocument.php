<?php

namespace App\Livewire;

use App\Imports\csvimport;
use App\Models\Csvdocument as ModelsCsvdocument;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\LaravelPdf\Facades\Pdf;

class Csvdocument extends Component
{
    use WithFileUploads; // Include Livewire's file upload trait

    public $csvdata;

    public function create()
    {

        ModelsCsvdocument::create([
            'name' => $this->name,
            'email' => $this->email,
            'addres' => $this->addres,
            'name' => $this->name,
            'hendel' => $this->hendel,
            'bio' => $this->bio,
            'location' => $this->location,
            'website' => $this->website,
            'JoinDate' => $this->JoinDate,
            'followingCount' => $this->followingCount,
            'tweetCount' => $this->tweetCount,
            'isVerifed' => $this->isVerifed,
            'profileImageUrl' => $this->profileImageUrl,
            'bannerImageUrl' => $this->bannerImageUrl,
        ]);

        session()->flash('status', 'Data successfully saved.');

        return $this->redirect('/');
    }

    public function import()
    {
        $this->validate([
            'csvdata' => 'required|mimes:csv,txt',
        ]);

        Excel::import(new csvimport, $this->csvdata->getRealPath());

        return redirect('/')->with('success', 'CSV imported successfully!');

    }

    // Render the view
    public function render()
    {
        $data = ModelsCsvdocument::all();

        return view('livewire.csvdocument', ['data' => $data]);
    }

    public function delete($id)
    {
        ModelsCsvdocument::find($id)->delete();
        session()->flash('status', 'Data deleted successfully.');
    }

    public function pdfDownload()
    {
        Pdf::view('main')->save('/some/directory/invoice.pdf');
    }
}
