<?php

use cms\Section\SectionRepoInterface;

class AdminSectionsController extends BaseController {

    protected $rules = array(
        'name'          => 'required',
        'slug_url'      => 'required',
        'type'          => 'required|in:page,blog,gallery',
        'menu'          => 'required|in:1,0',
        'published'     => 'required|in:1,0',
        'menu_order'    => 'integer'
    );
    /**
     * @var
     */
    protected  $sectionRepo;

    // Constructor
    public function __construct(SectionRepoInterface $sectionRepo){
        $this->sectionRepo = $sectionRepo;
    }

	public function index()	{
        $orderField = Input::get('order_by', 'created_at');
        $orderDirection=Input::get('order_direction', 'DESC');
        $sections = $this->sectionRepo->search(Input::all(),$orderField, $orderDirection,'\cms\Base\BaseRepo::PAGINATE');
        return View::make('CPanel.admin.sections.index',compact('sections'));
	}

    public function show($id){
        $section = $this->sectionRepo->findOrFail($id);
        return View::make('CPanel.admin.sections.show')->with('section',$section);
    }

    /* =========== Creacion de secciones =========== */
	public function create(){
        return View::make('CPanel.admin.sections.create');
	}

	public function store()	{
        $data = Input::all();
        // Validacion en lavarel
        $validator = Validator::make($data,$this->rules);

        if($validator->passes()){
            $section = $this->sectionRepo->create($data);
            return Redirect::route('CPanel.admin.sections.index');
        }else{
            return Redirect::back()->withInput()->withErrors($validator);
        }
	}
    /*==============================================*/

    /* =========== Edicion de secciones =========== */
	public function edit($id){
        $section = $this->sectionRepo->findOrFail($id);
        return View::make('CPanel.admin.sections.edit')->with('section',$section);
	}

	public function update($id){
        $section = $this->sectionRepo->findOrFail($id);

        $data = Input::all();
        // Validacion en lavarel
        $validator = Validator::make($data,$this->rules);

        if($validator->passes()){
            $this->sectionRepo->update($section,$data);
            return Redirect::route('CPanel.admin.sections.index');
        }else{
            return Redirect::back()->withInput()->withErrors($validator);
        }
	}
    /*==============================================*/
    /* =========== Eliminar de secciones =========== */
    public function delete($id){
        $section = $this->sectionRepo->findOrFail($id);
        return View::make('CPanel.admin.sections.delete')->with('section',$section);
    }

	public function destroy($id){
        $section = $this->sectionRepo->findOrFail($id);
        $this->sectionRepo->delete($section);
        return Redirect::route('CPanel.admin.sections.index');
	}
    /*==============================================*/

}
