import { Component } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';
import {NavController} from '@ionic/angular';
import { NetService } from '../net.service';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-about',
  templateUrl: 'about.page.html',
  styleUrls: ['about.page.scss']
})
export class AboutPage {
  public item:any;
  responseTxt:any;
  public data:any;
  user : any = {};
  FormsModule;
  public firstname:any;
  public lastname:any;
  constructor(public navCtrl: NavController,public http: HttpClient,
    public network:NetService 
    )
  {
  this.loadData();
    
  }
  loadData()
  {
    let data:Observable<any>;
    
    data = this.http.get('http://localhost/servicephp/ob.php');
    data.subscribe(result => {
      this.item = result;
    }     )
  }
  
  showtable()
  {
    this.network.readTable().then(data =>
      {
        console.log("I Receiver :"+JSON.stringify(data));
        this.responseTxt =""+JSON.stringify(data);
      })
  }


addtable(n1,n2,n3,n4,myDate5,myDate6,n7)
{
  this.network.writetable(n1,n2,n3,n4,myDate5,myDate6,n7).then(data =>
    {
      console.log("I Receiver :"+JSON.stringify(data));
      this.responseTxt =""+JSON.stringify(data);
    })
}





}
