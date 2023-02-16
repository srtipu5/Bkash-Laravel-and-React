import axios from 'axios';
export default function BkashAPICall() {
  console.log('Button clicked !!');
  axios.post('http://localhost:8000/api/bkash/create', {
    amount: '1',
  })
  .then(response => {
    console.log('Data was successfully sent.', response);
    window.location.href = response?.data?.bkashURL;
  })
  .catch(error => {
    console.log('An error occurred:', error);
  });
}
