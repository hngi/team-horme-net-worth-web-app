import pool from '../models/net-worth';


const assets = [
    {
        id: 1,
        asset: 'house',
        money: 2000
    },
    {
        id: 2,
        asset: 'car',
        money: 2000
    },
    {
        id: 3,
        asset: 'shop',
        money: 2000
    },
];

const NetWorth = {
    getAllEntries (req, res) {

    },
    AddEntry (req, res ){
        const 
        const { asset } = req.body;
        const {monetoty_value} = req.body;
      const lastId = assets[assets.id - 1];


    assets.push({
        id: lastId + 1,
        asset,
        monetoty_value
    })
       res.json(assets)
    }
}

export default NetWorth;