<?php
include_once("DataAccess.php");
class Product
{
	private $da;
	function __construct()
	{
		$this->da = new DataAccess(); 
	}
	function InsertProduct($CateID,$ProdName,$Des,$Price,$Quantity,$ImageURL)
	{
		$sql="INSERT into products(CateID,ProdName,Des,Price,Quantity,ImageURL) values($CateID,'$ProdName','$Des',$Price,$Quantity,'$ImageURL')";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateProduct($ProdID,$CateID,$ProdName,$Price,$Quantity,$Des,$ImageURL="")
	{
		if($ImageURL=="")
		{
			$sql="UPDATE products set CateID=$CateID,ProdName='$ProdName',Price=$Price,Quantity=$Quantity, Des='$Des' where ProdID=$ProdID";
		}else{
			$sql="UPDATE products set CateID=$CateID,ProdName='$ProdName',Price=$Price,Quantity=$Quantity, Des='$Des',ImageURL = '$ImageURL' where ProdID=$ProdID";
		}
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteProduct($productID)
	{
		$sql = "DELETE from products where ProdID=$productID";
		return $this->da->ExecuteQuery($sql);
	}
	function GetProducts($start,$limit)
	{
		$sql="SELECT ProdID,CateID,ProdName,Des,Price,Discount,Quantity,Rate,ImageURL from products limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetAllProducts()
	{
		$sql="SELECT ProdID,CateID,ProdName,Des,Price,Discount,Quantity,Rate,ImageURL from products";
		return $this->da->FetchAll($sql);
	}
	function GetProductsManage()
	{
		$sql="SELECT ProdID,products.CateID,CateName,ProdName,Des,Price,Discount,Quantity,Rate,ImageURL from products join categories on products.CateID = categories.CateID";
		return $this->da->FetchAll($sql);
	}
	function GetProductsByCategory($id)
	{
		$sql="SELECT ProdID,CateID,ProdName,Des,Price,Discount,Quantity,Rate,ImageURL from products where CateID=$id";
		return $this->da->FetchAll($sql);
	}
	function GetProductByID($id)
	{
		$sql="SELECT ProdID,CateID,ProdName,Des,Price,Discount,Quantity,Rate,ImageURL from products where ProdID=$id";
		return $this->da->Fetch($sql);
	}
	function GetProductsOrther($id,$CateID)
	{
		$sql="SELECT ProdID,CateID,ProdName,Des,Price,Discount,Quantity,Rate,ImageURL from products where ProdID!=$id and CateID=$CateID";
		return $this->da->FetchAll($sql);
	}
	function CountProducts()
	{
		$sql="SELECT ProdID from products";
		return $this->da->NumRows($sql);
	}
	function SearchProduct($name)
	{
		$sql = "SELECT ProdID,CateID,ProdName,Des,Price,Discount,Quantity,Rate,ImageURL from products where ProdName like '%$name%'";
		return $this->da->FetchAll($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>