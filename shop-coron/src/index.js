const express = require('express')
const hbs = require('express-handlebars')
const morgan = require('morgan')
const app = express()
const port = 3000

app.engine('handlebars', hbs.engine());
app.set('view engine', 'handlebars');
app.set('views', path.join(__dirname, '.src/views'))

app.use(morgan('combined'))

app.get('/trang-chu', (req, res) => {
  res.send('Hello World!')
})

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})