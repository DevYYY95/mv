<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CreateImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                   'image_name' => 'alpha_num|required|unique:movie_images',
                   'now_showing' => 'required|boolean',
                   'coming_soon' => 'required|boolean',
                   'image' => 'required|mimes:jpeg,jpg,bmp,png|max:1000',
        ];
    }
    public function store(CreateImageRequest $request)
    {
    //create new instance of model to save from form
        $movieImage = new Movieimage([
                'image_name'=> $request->get('image_name'),
                'image_extension'=> $request->file('image')
                               ->getClientOriginalExtension(),
                'now_showing'=> $request->get('now_showing'),
                'coming_soon'=> $request->get('coming_soon')     
        ]);
        // save model
            $movieImage->save();
            // get instance of file
            $file = $this->getUploadedFile();
            // pass in the file and the model
            $this->saveImageFiles($file, $movieImage);
            
        alert()->success('Congrats!', 'Movie Image Created!');
        return redirect()->route('movie-image.show', [$movieImage]);
    }
}
