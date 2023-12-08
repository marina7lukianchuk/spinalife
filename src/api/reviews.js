const express = require('express');
const cors = require('cors');
const axios = require('axios');
const app = express();
const PORT = 3000;

app.use(cors());
app.use(express.json());

app.get('/reviews', async (req, res) => {
      try {
            const response = await axios.get(`https://maps.googleapis.com/maps/api/place/details/json`, {
                  params: {
                        key: 'AIzaSyC8X68xuLMaL9YA_FeTgjwwwCE-aIZGZBE',
                        placeid: req.query.placeId,
                        language: 'uk',
                  }
            });
            res.json(response.data);
      } catch (error) {
            console.error('Error fetching reviews:', error.message);
            res.status(500).json({ error: 'Internal Server Error' });
      }
});

app.listen(PORT, () => {
      console.log(`Server is running on port ${PORT}`);
});