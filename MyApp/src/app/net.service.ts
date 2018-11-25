import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class NetService {

  constructor(public http:HttpClient) { 
    console.log('hello');
  }
readTable()
{
  let url="http://localhost/servicephp/read.php";
  let request = this.http.get(url);
  return request.toPromise();
}


  writetable(n1,n2,n3,n4,myDate5,myDate6,n7):Promise<any>
{
  let url ="http://localhost/servicephp/in1.php";
  let param ={studentid : n1,namestudent : n2,telstudent : n3,nameobject : n4,dateborrow : myDate5
    ,datereturn : myDate6,detail : n7};
  let request = this.http.post(url,param);
  return request.toPromise();

}
updatetable(n1,n8):Promise<any>
{
  let url ="http://localhost/servicephp/update.php";
  let param ={studentid : n1,status : n8};
  let request = this.http.post(url,param);
  return request.toPromise();

}
detable(n10):Promise<any>
{
  let url ="http://localhost/servicephp/delete.php";
  let param ={studentid : n10};
  let request = this.http.post(url,param);
  return request.toPromise();

}
}
