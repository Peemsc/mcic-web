// axios
import axios from 'axios'

export default axios.create({
  // baseURL: "http://localhost:3040"
  // baseURL: "https://api.oknation.net"
  // baseURL: "https://oknation-dev-api2.gramick.dev/"
  baseURL: process.env.VUE_APP_API_URL
  // baseURL: "https://api-stag.oknation.net"
  // You can add your headers here
})
