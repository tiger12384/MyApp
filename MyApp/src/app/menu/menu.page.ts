import { Component } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';
import {NavController} from '@ionic/angular';
import { NetService } from '../net.service';

@Component({
  selector: 'app-menu',
  templateUrl: './menu.page.html',
  styleUrls: ['./menu.page.scss'],
})
export class MenuPage {
  public item:any;
  
  responseTxt:any;
  constructor(public navCtrl: NavController,public http: HttpClient,
    public network:NetService)
  {
  this.loadData();
    
  }
  loadData()
  {
    let data:Observable<any>;
    
    data = this.http.get('http://localhost/servicephp/list.php');
    data.subscribe(result => {
      this.item = result;
    } )
  }

  updatetable(n1,n8)
{
  this.network.updatetable(n1,n8).then(data =>
    {
      console.log("I Receiver :"+JSON.stringify(data));
      this.responseTxt =""+JSON.stringify(data);
    })
}

detable(n10)
{
  this.network.detable(n10).then(data =>
    {
      console.log("I Receiver :"+JSON.stringify(data));
      this.responseTxt =""+JSON.stringify(data);
    })
}

 }

