import pg from 'pg';
import dotenv from 'dotenv';


dotenv.config();

const connectToDatabase = {
    server: process.env.DB_SERVER,
    port: process.env.DB_PORT,
    user: process.env.DB_HOST,
    password: process.env.DB_PASSWORD,
    database: process.env.DB_DATABASE
};

const pool = new pg.Pool(connectToDatabase);

pool.on('connect', () => {});

//user table
const createLiabilityTable = async () => {
  
    const netWorthTableQuery = `CREATE TABLE IF NOT EXISTS
    liability(
        liability_id SERIAL PRIMARY KEY NOT NULL UNIQUE,
        liability VARCHAR(100) NOT NULL,
        monetory_value VARCHAR(100) NOT NULL,
        date DATE NOT NULL,
        userId SERIAL PRIMARY KEY NOT NULL UNIQUE
    )`;

    try{
        await pool.query(netWorthTableQuery);
        console.log('liability table created');
    }
    catch(err){
        console.log(err);
    }
};

//request table
const createAssetTable = async () => {
    
    const netWorthTableQuery = `CREATE TABLE IF NOT EXISTS
    asset(
        asset_id SERIAL PRIMARY KEY NOT NULL UNIQUE,
        asset VARCHAR(100) NOT NULL,
        monetory_value VARCHAR(100) NOT NULL,
        date DATE NOT NULL,
        userId INT NOT NULL,
        FOREIGN KEY(userId) REFERENCES liability(liability_id) ON DELETE CASCADE ON UPDATE CASCADE
    )`;

    try{
        await pool.query(netWorthTableQuery);
        console.log('asset table created');
    }
    catch(err){
        console.log(err);
    }
}

// drop table
// const dropTable = async () => {
//     const query = `DROP TABLE IF EXISTS asset`;
//     try{
//         await pool.query(query);
//         console.log('asset table dropped');
//     }
//     catch(error){
//         console.log(error);
//     }
// };



//first table
createLiabilityTable();

//second table
createAssetTable();

//drop table
// dropTable();


export default pool;