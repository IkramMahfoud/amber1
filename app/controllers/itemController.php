<?php

class itemController extends Controller
{
    private $itemModel;
    public function __construct()
    {
        $this->itemModel = $this->model('item');
    }

    //CHECKING SUBMIT BUTTON PRESS or NOT.
    public function insert()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST);
            for ($i=0; $i < count($_POST['name']); $i++) {
                // echo "<pre>";
                // $arr=$_FILES['image'];
                // print_r($arr['name'][$i]);
                

                $name = $_POST['name'][$i];
                $Prix = $_POST['price'][$i];
                $category = $_POST['category'][$i];
                $Image = $_FILES['image']['name'][$i];
                $this->itemModel->insert($name, $Prix, $Image,$category);
                
            }
            
            header('location:'.URLROOT.'galleryController/showGallery');
        } else {
            $this->view('additem');
            }
        }




    //UPDATE METHOD:
    /*_______________________
    function in model named  edit [ sql = update.... ]
         if (isset post){call function edit in model to controller }
         else{view(form to edit)}*/

    public function edititem($id){
        $product = $this->model('item')->getProductInfos($id);
        $data = $product;
        $this->view('edititem', $data);
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
                $name = $_POST["name"];
                $prc = $_POST["price"];
                $img = $_FILES["image"]["name"];
                $ctg = $_POST["category"];
            if($this->itemModel->edit($id, $name, $prc, $img, $ctg)){
                header('location:' . URLROOT . 'home/dashboard');
                // $this->view('dashboard');
            }
            
        }
        else{$this->view('additem');}

    }
    public function delete($id)
    {
        $this->model('item')->delete($id);
        header('location:' . URLROOT . 'home/dashboard');
    }
public function orderProduct($by,$order) // /amber/itemController/orderProduct/item_price/DESC
{
    $galleryarray = $this->itemModel->trie( $by, $order );

        // creation array's items data:
        $data=
        [
            'galleryrow'    => $galleryarray
        ];
        $this->view('dashboard',$data);
}



//////////////////////////////////////////////////////////////
    public function showStatistic()
    {
        $maxPrice= $this->itemModel->maxPrice();
        $sumPrice= $this->itemModel->sumPrice();
        $totalItems= $this->itemModel->totalItems();
        
        $data=[
                'max' => $maxPrice,
                'sum' => $sumPrice,
                'total' => $totalItems
        ];
        $this->view('statistics',$data);
    }
///////////////////////////////////////////////////////////


    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $libelle = $_POST['libelle'];
            
            $galleryarray = $this->itemModel->search($libelle);

            // creation array's items data:
            $data=
            [
                'galleryrow'    => $galleryarray
            ];
            $this->view('dashboard',$data);
        }else{
            header('location:' . URLROOT . 'home/dashboard');
        }
    }
    
}
